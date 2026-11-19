<?php

/**
 * @file
 * Verify the simplified Show and banner; synthetic fixtures are rolled back.
 */

use Drupal\Core\Session\AnonymousUserSession;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\node\Entity\Node;
use Drupal\views\Views;
use Drupal\webform\Entity\WebformSubmission;

if (PHP_SAPI !== 'cli') {
  exit;
}
function show_check(bool $condition, string $message): void {
  if (!$condition) {
    throw new \RuntimeException($message);
  }
  echo 'PASS: ' . $message . PHP_EOL;
}
$remove = ['field_musician_bass', 'field_musician_dj', 'field_dj', 'field_musician_drums', 'field_enquiry_date', 'field_enquiry_source', 'field_musician_guitar', 'field_musician_keyboards', 'field_line_up', 'field_pa', 'field_requests', 'field_show_length', 'field_sound', 'field_status', 'field_musician_vocals'];
$db = \Drupal::database();
foreach ($remove as $name) {
  show_check(!FieldConfig::loadByName('node', 'show', $name) && !FieldStorageConfig::loadByName('node', $name) && !$db->schema()->tableExists('node__' . $name) && !$db->schema()->tableExists('node_revision__' . $name), 'Removed field and current/revision tables: ' . $name);
}
$display = \Drupal::entityTypeManager()->getStorage('entity_form_display')->load('node.show.default');
show_check(!$display->getThirdPartySettings('field_group'), 'No Field Group tabs on Show form');
$archive = \Drupal::service('lkb_song_archive.archive');
$archive_before = $archive->total();
$transaction = $db->startTransaction();
$switcher = \Drupal::service('account_switcher');
$switcher->switchTo(\Drupal\user\Entity\User::load(1));
$switched = TRUE;
try {
  $show = Node::create([
    'type' => 'show', 'title' => 'Show cleanup verification fixture', 'status' => 1,
    'field_show_date' => gmdate('Y-m-d\TH:i:s'),
    'field_show_location' => 'Synthetic test venue', 'field_town' => 'Test town',
    'field_song_list' => ['target_id' => 'song_request_4_piece_2026', 'status' => 'open'],
  ]);
  $show->save();
  $edit = \Drupal::service('entity.form_builder')->getForm($show, 'default');
  foreach (['title', 'field_show_date', 'field_show_location', 'field_town', 'field_song_list', 'publish_on', 'unpublish_on'] as $name) {
    show_check(isset($edit[$name]), 'Show editor retains ' . $name);
  }
  foreach ($remove as $name) {
    show_check(!isset($edit[$name]), 'Show editor excludes ' . $name);
  }
  show_check(!Views::getView('daisuke'), 'Obsolete Daisuke view is absent');
  $switcher->switchBack();
  $switched = FALSE;
  $switcher->switchTo(new AnonymousUserSession());
  $switched = TRUE;
  show_check($show->access('view'), 'Published Show accessible to guests');
  $build = \Drupal::entityTypeManager()->getViewBuilder('node')->view($show, 'full');
  $html = (string) \Drupal::service('renderer')->renderInIsolation($build);
  show_check(str_contains($html, 'name="your_song_choice"') && str_contains($html, 'Synthetic test venue'), 'Guest Show renders venue and embedded song select');
  $banner_contains = function (int $id): bool {
    $view = Views::getView('show_banner_on_front_page');
    $view->setDisplay('block_1');
    $view->display_handler->setOption('cache', ['type' => 'none', 'options' => []]);
    $view->execute();
    foreach ($view->result as $row) {
      if ((int) $row->_entity->id() === $id) {
        return TRUE;
      }
    }
    return FALSE;
  };
  show_check($banner_contains((int) $show->id()), 'Live banner includes published Show');
  $form = $show->field_song_list->entity;
  $options = \Drupal\Core\Form\OptGroup::flattenOptions($form->getElementInitialized('your_song_choice')['#options']);
  $submission = WebformSubmission::create(['webform_id' => $form->id(), 'entity_type' => 'node', 'entity_id' => $show->id(), 'data' => ['your_song_choice' => array_key_first($options)]]);
  $submission->save();
  show_check($archive->total() === $archive_before + 1, 'Show-linked request still archives song');
  $submission->delete();
  show_check($archive->total() === $archive_before + 1, 'Singer deletion still preserves archived song');
  $show->setUnpublished()->save();
  show_check(!$banner_contains((int) $show->id()), 'Live banner excludes unpublished Show');
}
finally {
  if ($switched) {
    $switcher->switchBack();
  }
  $transaction->rollBack();
  foreach (['node', 'webform_submission'] as $type) {
    \Drupal::entityTypeManager()->getStorage($type)->resetCache();
  }
}
show_check($archive->total() === $archive_before, 'Synthetic request/archive fixtures rolled back');
