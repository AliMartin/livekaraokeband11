<?php

/**
 * @file
 * Import surviving completed requests from explicitly enabled forms, once only.
 *
 * Run: ddev exec drush php:script modules/custom/lkb_song_archive/scripts/backfill.php
 */

if (PHP_SAPI !== 'cli') {
  exit;
}
$archive = \Drupal::service('lkb_song_archive.archive');
$storage = \Drupal::entityTypeManager()->getStorage('webform_submission');
$imported = 0;
foreach (\Drupal::entityTypeManager()->getStorage('webform')->loadMultiple() as $form) {
  if (!$form->getThirdPartySetting('lkb_song_archive', 'enabled', FALSE)) {
    continue;
  }
  $cursor = 0;
  do {
    $ids = $storage->getQuery()->accessCheck(FALSE)
      ->condition('webform_id', $form->id())->condition('in_draft', 0)
      ->condition('sid', $cursor, '>')->sort('sid')->range(0, 100)->execute();
    foreach ($storage->loadMultiple($ids) as $submission) {
      $imported += (int) $archive->capture($submission);
    }
    if ($ids) {
      $cursor = max($ids);
      $storage->resetCache($ids);
    }
  } while ($ids);
}
echo 'Imported ' . $imported . ' previously uncaptured requests. Archive total: ' . $archive->total() . PHP_EOL;
