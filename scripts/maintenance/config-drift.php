<?php

/**
 * @file
 * Read-only, narrowly scoped configuration drift diagnostics.
 */

if (PHP_SAPI !== 'cli') {
  exit;
}
$active = \Drupal::service('config.storage');
$sync = \Drupal::service('config.storage.sync');
$names = array_merge([
  'backup_migrate.backup_migrate_schedule.daily_schedule',
  'core.entity_form_display.node.show.default',
  'views.view.entries',
  'webform.webform.song_request_4_piece_2026',
  'webform.webform.song_request_5_piece_2026',
], $sync->listAll('klaro.klaro_app.'));
function lkb_drift_value($value, string $path): string {
  if (preg_match('/password|secret|token|credential|api_key/i', $path)) {
    return '[redacted]';
  }
  if (preg_match('/callback_code|on_init|on_accept|on_decline/', $path) && is_string($value) && $value !== '') {
    return '[non-empty callback omitted]';
  }
  $encoded = json_encode($value, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
  return strlen($encoded) > 160 ? '[long value: ' . strlen($encoded) . ' bytes]' : $encoded;
}
function lkb_drift_compare($file, $db, string $path = ''): void {
  if ($file === $db) {
    return;
  }
  if (is_array($file) && is_array($db)) {
    if (!array_diff_key($file, $db) && !array_diff_key($db, $file) && array_keys($file) !== array_keys($db)) {
      echo '  ' . ($path ?: '[root]') . ': mapping key order differs' . PHP_EOL;
    }
    foreach (array_unique(array_merge(array_keys($file), array_keys($db))) as $key) {
      $child = $path === '' ? (string) $key : $path . '.' . $key;
      if (!array_key_exists($key, $file)) {
        echo '  ' . $child . ': only active = ' . lkb_drift_value($db[$key], $child) . PHP_EOL;
      }
      elseif (!array_key_exists($key, $db)) {
        echo '  ' . $child . ': only sync = ' . lkb_drift_value($file[$key], $child) . PHP_EOL;
      }
      else {
        lkb_drift_compare($file[$key], $db[$key], $child);
      }
    }
    return;
  }
  echo '  ' . $path . ': sync=' . lkb_drift_value($file, $path) . ' | active=' . lkb_drift_value($db, $path) . PHP_EOL;
}
foreach ($names as $name) {
  $file = $sync->read($name);
  $db = $active->read($name);
  if ($file !== $db) {
    echo $name . PHP_EOL;
    lkb_drift_compare($file, $db);
  }
}
echo 'Show editor enabled: ' . (\Drupal::moduleHandler()->moduleExists('lkb_show_editor') ? 'yes' : 'no') . PHP_EOL;
$class = \Drupal\lkb_show_editor\Hook\ShowEditorHooks::class;
echo 'Open-form filter code present: ' . (class_exists($class) && method_exists($class, 'openOptions') ? 'yes' : 'no') . PHP_EOL;

// Build an unsaved new Show as an administrator to inspect real widget choices.
if (\Drupal::moduleHandler()->moduleExists('lkb_show_editor')) {
  $switcher = \Drupal::service('account_switcher');
  $switcher->switchTo(\Drupal\user\Entity\User::load(1));
  try {
    $node = \Drupal\node\Entity\Node::create(['type' => 'show']);
    $form = \Drupal::service('entity.form_builder')->getForm($node, 'default');
    $options = \Drupal\Core\Form\OptGroup::flattenOptions($form['field_song_list']['widget'][0]['target_id']['#options'] ?? []);
    $closed = [];
    foreach (array_keys($options) as $id) {
      if (!$id) {
        continue;
      }
      $webform = \Drupal::entityTypeManager()->getStorage('webform')->load($id);
      if ($webform && !$webform->isOpen()) {
        $closed[] = $id;
      }
    }
    echo 'Closed choices on unsaved new Show: ' . ($closed ? implode(', ', $closed) : 'none') . PHP_EOL;
  }
  finally {
    $switcher->switchBack();
  }
}
