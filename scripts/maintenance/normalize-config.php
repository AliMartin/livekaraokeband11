<?php

/**
 * @file
 * Export only audited save-time defaults/order changes; never import or save DB.
 *
 * Defaults to dry run. Set LKB_NORMALIZE_CONFIG_APPLY=1 to update sync files.
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

/**
 * Allow map ordering and only the specific defaults/type casts already audited.
 */
function lkb_normalize_validate(string $name, array $file, array $db, string $path = ''): void {
  foreach (array_unique(array_merge(array_keys($file), array_keys($db))) as $key) {
    $child = $path === '' ? (string) $key : $path . '.' . $key;
    if (!array_key_exists($key, $db)) {
      throw new \RuntimeException('Unexpected removed property: ' . $name . ':' . $child);
    }
    if (!array_key_exists($key, $file)) {
      $value = $db[$key];
      $klaro_default = str_starts_with($name, 'klaro.klaro_app.') && in_array($child, ['on_init', 'on_accept', 'on_decline'], TRUE) && $value === '';
      $backup_default = $name === 'backup_migrate.backup_migrate_schedule.daily_schedule' && (($child === 'encrypt' && in_array($value, [NULL, FALSE], TRUE)) || ($child === 'encrypt_password' && in_array($value, [NULL, ''], TRUE)));
      $view_default = $name === 'views.view.entries' && $child === 'display.default.display_options.exposed_form.options.bef.filter.title.advanced.no_reset' && $value === FALSE;
      if (!$klaro_default && !$backup_default && !$view_default) {
        throw new \RuntimeException('Unexpected added property (value withheld): ' . $name . ':' . $child);
      }
      continue;
    }
    if ($file[$key] === $db[$key]) {
      continue;
    }
    if (is_array($file[$key]) && is_array($db[$key])) {
      lkb_normalize_validate($name, $file[$key], $db[$key], $child);
      continue;
    }
    $interval_cast = $name === 'views.view.entries' && $child === 'display.default.display_options.header.auto_refresh.interval' && is_string($file[$key]) && is_int($db[$key]) && (string) $db[$key] === $file[$key];
    if (!$interval_cast) {
      throw new \RuntimeException('Unexpected changed property (value withheld): ' . $name . ':' . $child);
    }
  }
}

$changes = [];
foreach ($names as $name) {
  $file = $sync->read($name);
  $db = $active->read($name);
  if ($file === FALSE || $db === FALSE) {
    throw new \RuntimeException('Expected configuration missing: ' . $name);
  }
  // Never export an encryption credential, even when it is unchanged.
  if ($name === 'backup_migrate.backup_migrate_schedule.daily_schedule' && !in_array($db['encrypt_password'] ?? NULL, [NULL, ''], TRUE)) {
    throw new \RuntimeException('Nonempty encryption credential: review backup schedule separately. No files written.');
  }
  lkb_normalize_validate($name, $file, $db);
  if ($file !== $db) {
    $changes[$name] = ['before' => $file, 'after' => $db];
  }
}
foreach (array_keys($changes) as $name) {
  echo 'Audited export normalization: ' . $name . PHP_EOL;
}
if (getenv('LKB_NORMALIZE_CONFIG_APPLY') !== '1') {
  echo 'DRY RUN: ' . count($changes) . ' sync files would change; no data/configuration written.' . PHP_EOL;
  return;
}
$directory = sys_get_temp_dir() . '/lkb-config-normalize-' . bin2hex(random_bytes(6));
if (!mkdir($directory, 0700)) {
  throw new \RuntimeException('Cannot create private backup directory');
}
$backup = new \Drupal\Core\Config\FileStorage($directory);
foreach ($changes as $name => $data) {
  if (!$backup->write($name, $data['before'])) {
    throw new \RuntimeException('Backup failed; stopping before sync writes');
  }
  chmod($directory . '/' . $name . '.yml', 0600);
}
foreach ($changes as $name => $data) {
  if (!$sync->write($name, $data['after']) || $sync->read($name) !== $active->read($name)) {
    throw new \RuntimeException('Sync write/verification failed: ' . $name . '; restore from ' . $directory);
  }
}
echo 'Updated ' . count($changes) . ' sync files only. Database and content unchanged.' . PHP_EOL;
echo 'Previous sync files backed up privately in: ' . $directory . PHP_EOL;
