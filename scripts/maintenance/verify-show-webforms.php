<?php

/**
 * @file
 * Transactional regression check for Show's open-only Webform choices.
 */

use Drupal\Core\Form\OptGroup;
use Drupal\node\Entity\Node;
use Drupal\webform\Entity\Webform;

if (PHP_SAPI !== 'cli') {
  exit;
}
$db = \Drupal::database();
$transaction = $db->startTransaction();
$switcher = \Drupal::service('account_switcher');
$switcher->switchTo(\Drupal\user\Entity\User::load(1));
try {
  foreach (['open', 'closed', 'future', 'archived'] as $state) {
    $values = ['id' => 'lkb_select_test_' . $state, 'title' => 'Select test ' . $state, 'status' => $state === 'closed' ? 'closed' : 'open'];
    if ($state === 'future') {
      $values['status'] = 'scheduled';
      $values['open'] = gmdate('Y-m-d\TH:i:s', time() + 86400);
    }
    if ($state === 'archived') {
      $values['archive'] = TRUE;
    }
    Webform::create($values)->save();
  }
  $builder = \Drupal::service('entity.form_builder');
  $form = $builder->getForm(Node::create(['type' => 'show']), 'default');
  $options = OptGroup::flattenOptions($form['field_song_list']['widget'][0]['target_id']['#options']);
  if (!isset($options['lkb_select_test_open'])) {
    throw new \RuntimeException('Open Webform missing');
  }
  foreach (['closed', 'future', 'archived'] as $state) {
    if (isset($options['lkb_select_test_' . $state])) {
      throw new \RuntimeException('Unavailable Webform offered: ' . $state);
    }
  }
  foreach (array_keys($options) as $id) {
    if ($id && !Webform::load($id)->isOpen()) {
      throw new \RuntimeException('Closed option remains on new Show');
    }
  }
  echo 'PASS: New Show lists only currently open forms; closed, archived and future-scheduled forms excluded.' . PHP_EOL;
  $existing = Node::create(['type' => 'show', 'field_song_list' => ['target_id' => 'lkb_select_test_closed']]);
  $form = $builder->getForm($existing, 'default');
  $target = $form['field_song_list']['widget'][0]['target_id'];
  $options = OptGroup::flattenOptions($target['#options']);
  if (!isset($options['lkb_select_test_closed']) || $target['#default_value'] !== 'lkb_select_test_closed' || !str_contains((string) $options['lkb_select_test_closed'], 'current selection')) {
    throw new \RuntimeException('Existing closed reference is not safely preserved/labeled');
  }
  if (isset($options['lkb_select_test_future'])) {
    throw new \RuntimeException('Other unavailable choices offered');
  }
  echo 'PASS: Existing closed reference retained and labeled; other unavailable choices remain excluded.' . PHP_EOL;
}
finally {
  $transaction->rollBack();
  \Drupal::configFactory()->reset();
  \Drupal::entityTypeManager()->getStorage('webform')->resetCache();
  $switcher->switchBack();
}
