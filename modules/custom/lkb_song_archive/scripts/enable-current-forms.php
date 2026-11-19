<?php

/**
 * @file
 * Explicit one-time setup for the three current request forms; safe to repeat.
 *
 * Future forms are configured through their Settings > General screen.
 */

if (PHP_SAPI !== 'cli') {
  exit;
}
$storage = \Drupal::entityTypeManager()->getStorage('webform');
foreach (['song_request_4_piece_2026', 'song_request_5_piece_2026', 'song_request_5_piece_2026_xmas'] as $id) {
  $form = $storage->load($id);
  if (!$form || ($form->getElementDecoded('your_song_choice')['#type'] ?? '') !== 'select') {
    throw new \RuntimeException('Expected song choice field missing on ' . $id);
  }
  $form->setThirdPartySetting('lkb_song_archive', 'enabled', TRUE);
  $form->setThirdPartySetting('lkb_song_archive', 'song_field', 'your_song_choice');
  $form->save();
  echo 'Archive enabled: ' . $id . PHP_EOL;
}
