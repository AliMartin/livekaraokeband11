<?php

/**
 * @file
 * Read-only rendering regression check for Show scheduling under Gin.
 */

use Drupal\node\Entity\Node;

if (PHP_SAPI !== 'cli') {
  exit;
}
$switcher = \Drupal::service('account_switcher');
$switcher->switchTo(\Drupal\user\Entity\User::load(1));
$themes = \Drupal::theme();
$original_theme = $themes->getActiveTheme();
$themes->setActiveTheme(\Drupal::service('theme.initialization')->initTheme('gin'));
try {
  $storage = \Drupal::entityTypeManager()->getStorage('node');
  $ids = $storage->getQuery()->accessCheck(FALSE)->condition('type', 'show')->range(0, 1)->execute();
  $cases = ['add' => Node::create(['type' => 'show'])];
  if ($ids) {
    $cases['edit'] = $storage->load(reset($ids));
  }
  foreach ($cases as $mode => $node) {
    $form = \Drupal::service('entity.form_builder')->getForm($node, 'default');
    $html = (string) \Drupal::service('renderer')->renderInIsolation($form);
    foreach (['publish_on', 'unpublish_on'] as $field) {
      if (!preg_match('/<input\b[^>]*name="' . $field . '\[[^"]*\[date\]"/s', $html)) {
        throw new \RuntimeException('Missing rendered scheduling date input on ' . $mode . ': ' . $field);
      }
      if (!preg_match('/<input\b[^>]*name="' . $field . '\[[^"]*\[time\]"/s', $html)) {
        throw new \RuntimeException('Missing rendered scheduling time input on ' . $mode . ': ' . $field);
      }
    }
    if (str_contains($html, 'Scheduling options')) {
      throw new \RuntimeException('Collapsible Scheduling options heading still rendered');
    }
    $document = new \DOMDocument();
    $document->loadHTML('<?xml encoding="UTF-8">' . $html, LIBXML_NOERROR | LIBXML_NOWARNING);
    $xpath = new \DOMXPath($document);
    foreach (['publish_on', 'unpublish_on'] as $field) {
      $inputs = $xpath->query('//input[starts-with(@name, "' . $field . '[")]');
      foreach ($inputs as $input) {
        if ($xpath->query('ancestor::details', $input)->length) {
          throw new \RuntimeException('Scheduling input is still inside a collapsible group');
        }
      }
    }
    $song_position = strpos($html, 'name="field_song_list[');
    $publish_position = strpos($html, 'name="publish_on[');
    $unpublish_position = strpos($html, 'name="unpublish_on[');
    if ($song_position === FALSE || !($song_position < $publish_position && $publish_position < $unpublish_position)) {
      throw new \RuntimeException('Expected Song list, Publish on, Unpublish on order');
    }
    echo 'PASS: Show ' . $mode . ' form renders standalone publish/unpublish date/time fields below Song list under Gin.' . PHP_EOL;
  }
  $switcher->switchBack();
  $switcher->switchTo(new \Drupal\Core\Session\UserSession(['uid' => 99999999, 'roles' => ['authenticated']]));
  $restricted = \Drupal::service('entity.form_builder')->getForm(Node::create(['type' => 'show']), 'default');
  $restricted_html = (string) \Drupal::service('renderer')->renderInIsolation($restricted);
  if (str_contains($restricted_html, 'name="publish_on[') || str_contains($restricted_html, 'name="unpublish_on[')) {
    throw new \RuntimeException('Scheduling controls exposed without scheduling permission');
  }
  echo 'PASS: Users without scheduling permission still cannot see scheduling inputs.' . PHP_EOL;
}
finally {
  $themes->setActiveTheme($original_theme);
  $switcher->switchBack();
}
