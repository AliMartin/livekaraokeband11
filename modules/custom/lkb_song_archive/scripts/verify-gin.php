<?php

/**
 * @file
 * Read-only regression check for the report under the actual Gin admin theme.
 */

use Drupal\lkb_song_archive\Controller\ArchiveController;
use Symfony\Component\HttpFoundation\Request;

if (PHP_SAPI !== 'cli') {
  exit;
}
$manager = \Drupal::theme();
$original = $manager->getActiveTheme();
$switcher = \Drupal::service('account_switcher');
$switcher->switchTo(\Drupal\user\Entity\User::load(1));
$manager->setActiveTheme(\Drupal::service('theme.initialization')->initTheme('gin'));
set_error_handler(static function (int $severity, string $message, string $file, int $line): bool {
  if (error_reporting() & $severity) {
    throw new \ErrorException($message, 0, $severity, $file, $line);
  }
  return FALSE;
});
try {
  $request = Request::create('/admin/reports/song-requests', 'GET', ['q' => 'respect', 'sort' => 'title']);
  $build = ArchiveController::create(\Drupal::getContainer())->report($request);
  $html = (string) \Drupal::service('renderer')->renderInIsolation($build);
  foreach (['id="lkb-song-archive-filter"', 'id="lkb-song-archive-search"', 'for="lkb-song-archive-search"', 'id="lkb-song-archive-sort"', 'for="lkb-song-archive-sort"', 'method="get"', 'name="q"', 'value="respect"', 'value="title" selected'] as $expected) {
    if (!str_contains($html, $expected)) {
      throw new \RuntimeException('Missing rendered form attribute: ' . $expected);
    }
  }
  echo 'PASS: Gin report renders without warnings/deprecations; form IDs, accessible labels, search and selected sort preserved.' . PHP_EOL;
}
finally {
  restore_error_handler();
  $manager->setActiveTheme($original);
  $switcher->switchBack();
}
