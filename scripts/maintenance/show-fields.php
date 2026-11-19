<?php

/**
 * @file
 * Show CRM field cleanup. Run via Drush; defaults to read-only audit.
 */

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;

if (PHP_SAPI !== 'cli') {
  exit;
}
$remove = ['field_musician_bass', 'field_musician_dj', 'field_dj', 'field_musician_drums', 'field_enquiry_date', 'field_enquiry_source', 'field_musician_guitar', 'field_musician_keyboards', 'field_line_up', 'field_pa', 'field_requests', 'field_show_length', 'field_sound', 'field_status', 'field_musician_vocals'];
foreach ($remove as $name) {
  $storage = FieldStorageConfig::loadByName('node', $name);
  $uses = $storage ? array_values($storage->getBundles()) : [];
  echo $name . ': bundles=' . implode(',', $uses) . PHP_EOL;
}
foreach (\Drupal::configFactory()->listAll('views.view.') as $name) {
  $data = \Drupal::config($name)->getRawData();
  $text = json_encode($data);
  $references = array_filter($remove, fn($field) => str_contains($text, $field));
  if ($references) {
    echo $name . ': ' . implode(', ', $references) . PHP_EOL;
  }
}
foreach (\Drupal::configFactory()->listAll('core.entity_form_display.') as $name) {
  if (\Drupal::config($name)->get('third_party_settings.field_group')) {
    echo 'grouped_form: ' . $name . PHP_EOL;
  }
}

if (getenv('LKB_SHOW_CLEANUP_APPLY') !== '1') {
  echo 'Read-only audit. Set LKB_SHOW_CLEANUP_APPLY=1 to delete the listed Show fields and purge their data.' . PHP_EOL;
  return;
}
// Stop before changing anything if another environment shares these storages.
foreach ($remove as $name) {
  $storage = FieldStorageConfig::loadByName('node', $name);
  if ($storage && array_diff($storage->getBundles(), ['show'])) {
    throw new \RuntimeException('Field is shared outside Show; review before applying: ' . $name);
  }
}
$factory = \Drupal::configFactory();
$snapshot = function () use ($factory): array {
  $result = [];
  foreach ($factory->listAll() as $name) {
    $result[$name] = $factory->get($name)->getRawData();
  }
  return $result;
};
$before = $snapshot();
file_put_contents('/tmp/lkb-show-cleanup-before.json', json_encode($before));
chmod('/tmp/lkb-show-cleanup-before.json', 0600);
$preserved = [];
$db = \Drupal::database();
foreach (['node__field_show_date', 'node__field_show_location', 'node__field_town', 'node__field_song_list'] as $table) {
  $preserved[$table] = hash('sha256', serialize($db->select($table)->fields($table)->orderBy('entity_id')->orderBy('delta')->execute()->fetchAll()));
}
$archive = \Drupal::getContainer()->has('lkb_song_archive.archive') ? \Drupal::service('lkb_song_archive.archive') : NULL;
$archive_total = $archive?->total();
$submission_total = (int) $db->select('webform_submission')->countQuery()->execute()->fetchField();
$show_total = (int) $db->select('node')->condition('type', 'show')->countQuery()->execute()->fetchField();

// Clean dependent report handlers before field deletion to avoid disabling Views.
foreach (\Drupal\views\Entity\View::loadMultiple() as $view) {
  $displays = $view->get('display');
  $changed = FALSE;
  foreach ($displays as &$display) {
    foreach (['fields', 'filters', 'sorts', 'arguments', 'relationships'] as $type) {
      foreach ($display['display_options'][$type] ?? [] as $id => $handler) {
        $field = $handler['field'] ?? '';
        $table = $handler['table'] ?? '';
        if (in_array($field, $remove, TRUE) || in_array($table, array_map(fn($name) => 'node__' . $name, $remove), TRUE)) {
          unset($display['display_options'][$type][$id]);
          foreach (['columns', 'info'] as $key) {
            unset($display['display_options']['style']['options'][$key][$id]);
          }
          $changed = TRUE;
        }
      }
    }
    if (isset($display['cache_metadata']['tags'])) {
      $display['cache_metadata']['tags'] = array_values(array_filter($display['cache_metadata']['tags'], fn($tag) => !in_array($tag, array_map(fn($name) => 'config:field.storage.node.' . $name, $remove), TRUE)));
    }
  }
  unset($display);
  if ($changed) {
    $view->set('display', $displays);
    $view->save();
    echo 'Cleaned dependent view: ' . $view->id() . PHP_EOL;
  }
}

// Remove Field Group tabs on Show only. Keep other display/layout settings.
foreach (['entity_form_display', 'entity_view_display'] as $type) {
  $displays = \Drupal::entityTypeManager()->getStorage($type)->loadByProperties(['targetEntityType' => 'node', 'bundle' => 'show']);
  foreach ($displays as $display) {
    $display->unsetThirdPartySetting('field_group', 'group_booking');
    foreach (array_keys($display->getThirdPartySettings('field_group')) as $group) {
      $display->unsetThirdPartySetting('field_group', $group);
    }
    if ($type === 'entity_form_display') {
      // Scheduler places its date widgets inside this independent wrapper.
      // It must be displayed after removing the former Field Group tabs.
      $display->setComponent('scheduler_settings', ['weight' => -15, 'region' => 'content']);
      foreach (['title', 'field_show_date', 'field_show_location', 'field_town', 'field_song_list', 'publish_on', 'unpublish_on', 'field_meta_tags'] as $weight => $field) {
        $component = $display->getComponent($field);
        if ($component) {
          $component['weight'] = $weight - 20;
          $display->setComponent($field, $component);
        }
      }
    }
    $display->save();
  }
}

$storage_ids = [];
foreach ($remove as $name) {
  $storage = FieldStorageConfig::loadByName('node', $name);
  if ($storage) {
    $storage_ids[$name] = $storage->getUniqueStorageIdentifier();
  }
  if ($field = FieldConfig::loadByName('node', 'show', $name)) {
    $field->delete();
    echo 'Deleted Show field: ' . $name . PHP_EOL;
  }
}

// Permanently purge only these field storages, including revision data.
$repository = \Drupal::service('entity_field.deleted_fields_repository');
$purger = \Drupal::service(\Drupal\Core\Field\FieldPurger::class);
foreach ($storage_ids as $name => $uuid) {
  for ($i = 0; $i < 10000; $i++) {
    $pending_storage = array_filter($repository->getFieldStorageDefinitions(), fn($field) => $field->getUniqueStorageIdentifier() === $uuid);
    if (!$repository->getFieldDefinitions($uuid) && !$pending_storage) {
      break;
    }
    $purger->purgeBatch(500, $uuid);
  }
  if ($repository->getFieldDefinitions($uuid) || array_filter($repository->getFieldStorageDefinitions(), fn($field) => $field->getUniqueStorageIdentifier() === $uuid)) {
    throw new \RuntimeException('Field purge did not finish: ' . $name);
  }
  echo 'Purged deleted field data: ' . $name . PHP_EOL;
}

foreach ($preserved as $table => $checksum) {
  if ($checksum !== hash('sha256', serialize($db->select($table)->fields($table)->orderBy('entity_id')->orderBy('delta')->execute()->fetchAll()))) {
    throw new \RuntimeException('Retained Show field data changed: ' . $table);
  }
}
if ($archive_total !== $archive?->total() || $submission_total !== (int) $db->select('webform_submission')->countQuery()->execute()->fetchField() || $show_total !== (int) $db->select('node')->condition('type', 'show')->countQuery()->execute()->fetchField()) {
  throw new \RuntimeException('Show/submission/archive counts unexpectedly changed');
}
$factory->reset();
$after = $snapshot();
file_put_contents('/tmp/lkb-show-cleanup-after.json', json_encode($after));
chmod('/tmp/lkb-show-cleanup-after.json', 0600);
foreach ($before as $name => $data) {
  if (!isset($after[$name])) {
    echo 'CONFIG DELETE: ' . $name . PHP_EOL;
  }
  elseif ($data !== $after[$name]) {
    echo 'CONFIG CHANGE: ' . $name . PHP_EOL;
  }
}
echo 'PASS: retained Show data, Show count, audience submissions and song archive unchanged.' . PHP_EOL;
