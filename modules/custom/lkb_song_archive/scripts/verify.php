<?php

/**
 * @file
 * Integration checks against installed Drupal; all fixture writes roll back.
 */

use Drupal\Core\Session\AnonymousUserSession;
use Drupal\Core\Session\UserSession;
use Drupal\lkb_song_archive\Controller\ArchiveController;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\Role;
use Drupal\webform\Entity\Webform;
use Drupal\webform\Entity\WebformSubmission;
use Symfony\Component\HttpFoundation\Request;

if (PHP_SAPI !== 'cli') {
  exit;
}
function archive_check(bool $condition, string $message): void {
  if (!$condition) {
    throw new \RuntimeException($message);
  }
  echo 'PASS: ' . $message . PHP_EOL;
}
$db = \Drupal::database();
$archive = \Drupal::service('lkb_song_archive.archive');
$before = $archive->total();
$transaction = $db->startTransaction();
try {
  // A future-named form demonstrates that there is no year/ID hardcoding.
  $form = Webform::create([
    'id' => 'lkb_archive_test_2029', 'title' => 'Archive integration fixture',
    'elements' => "song:\n  '#type': select\n  '#title': Song\n  '#options':\n    first: 'A, \"Song\" & Artist'\n    second: '=Formula example'\nname:\n  '#type': textfield\n  '#title': Name\n",
  ]);
  $form->setThirdPartySetting('lkb_song_archive', 'enabled', TRUE);
  $form->setThirdPartySetting('lkb_song_archive', 'song_field', 'song');
  $form->save();
  $show = Node::create(['type' => 'show', 'title' => 'Archive fixture Show', 'status' => 1, 'field_song_list' => ['target_id' => $form->id()]]);
  $show->save();
  $submission = WebformSubmission::create(['webform_id' => $form->id(), 'entity_type' => 'node', 'entity_id' => $show->id(), 'data' => ['song' => 'first', 'name' => 'Synthetic singer']]);
  $submission->save();
  archive_check($archive->total() === $before + 1, 'Completed request is captured');
  $submission->setElementData('song', 'second');
  $submission->save();
  archive_check($archive->total() === $before + 1, 'Repeated saves and edits do not duplicate or replace original song');
  $show->setUnpublished()->save();
  archive_check($archive->total() === $before + 1, 'Unpublishing Show preserves archive');
  $submission->delete();
  archive_check($archive->total() === $before + 1, 'Singer deletion preserves archive');
  archive_check(!(bool) $db->select('lkb_song_archive_receipt', 'r')->condition('sid', $submission->id())->countQuery()->execute()->fetchField(), 'Source deletion removes only its technical receipt');
  $draft = WebformSubmission::create(['webform_id' => $form->id(), 'in_draft' => TRUE, 'data' => ['song' => 'first']]);
  $draft->save();
  archive_check($archive->total() === $before + 1, 'Draft not counted');
  $draft->set('in_draft', FALSE)->save();
  archive_check($archive->total() === $before + 2, 'Draft completion counted once');
  $form->setThirdPartySetting('lkb_song_archive', 'enabled', FALSE)->save();
  WebformSubmission::create(['webform_id' => $form->id(), 'data' => ['song' => 'first']])->save();
  archive_check($archive->total() === $before + 2, 'Disabled form not captured');
  $form->setThirdPartySetting('lkb_song_archive', 'enabled', TRUE);
  $form->setThirdPartySetting('lkb_song_archive', 'song_field', 'missing_song');
  $invalid = WebformSubmission::create(['webform_id' => $form->id(), 'data' => ['song' => 'first']]);
  // Use a synthetic ID to exercise mapping validation without saving a bad request.
  $invalid->set('sid', 2147483647);
  $invalid->setWebform($form);
  $rejected = FALSE;
  try {
    $archive->capture($invalid);
  }
  catch (\UnexpectedValueException $e) {
    $rejected = TRUE;
  }
  archive_check($rejected && $archive->total() === $before + 2, 'Broken field mapping fails explicitly without creating archive data');
  $form->setThirdPartySetting('lkb_song_archive', 'song_field', 'song');

  $form->setThirdPartySetting('lkb_song_archive', 'enabled', TRUE)->save();
  $row = $archive->summary('A, "Song" & Artist')->execute()->fetchObject();
  archive_check($row && (int) $row->requests === 2, 'Summary uses visible song label and counts repeated requests');
  $controller = ArchiveController::create(\Drupal::getContainer());
  $request = Request::create('/admin/reports/song-requests', 'GET', ['q' => 'A, "Song" & Artist']);
  $build = $controller->report($request);
  archive_check(count($build['table']['#rows']) === 1, 'Search report matches grouped results');
  $response = $controller->csv($request, 'summary');
  ob_start();
  $response->sendContent();
  $csv = ob_get_clean();
  $lines = explode("\n", trim(substr($csv, 3)));
  $csv_row = str_getcsv($lines[1], ',', '"', '');
  archive_check($csv_row[0] === 'A, "Song" & Artist' && $csv_row[1] === '2', 'CSV correctly quotes titles and matches report counts');
  archive_check(str_contains($response->headers->get('Cache-Control'), 'no-store'), 'CSV cannot be publicly cached');
  archive_check(ArchiveController::csvText('=SUM(1,2)') === "'=SUM(1,2)", 'CSV neutralises spreadsheet formulas');
  $anonymous = new AnonymousUserSession();
  $access = \Drupal::service('access_manager');
  foreach (['lkb_song_archive.report' => [], 'lkb_song_archive.csv' => ['mode' => 'entries'], 'lkb_song_archive.clear' => []] as $route => $parameters) {
    archive_check(!$access->checkNamedRoute($route, $parameters, $anonymous), 'Anonymous denied: ' . $route);
  }
  $role = Role::create(['id' => 'lkb_archive_test', 'label' => 'Archive test', 'permissions' => ['view song request archive']]);
  $role->save();
  $reader = new UserSession(['uid' => 99999999, 'roles' => [$role->id()]]);
  archive_check($access->checkNamedRoute('lkb_song_archive.report', [], $reader), 'Report permission grants read access');
  archive_check(!$access->checkNamedRoute('lkb_song_archive.clear', [], $reader), 'Report permission does not grant deletion');
  // Inspect the schema definition itself: no personal/source columns exist.
  \Drupal::moduleHandler()->loadInclude('lkb_song_archive', 'install');
  archive_check(array_keys(lkb_song_archive_schema()['lkb_song_archive']['fields']) === ['id', 'song'], 'Archive schema contains only internal ID and song title');
  $archive->clear();
  archive_check($archive->total() === 0, 'Clear removes all archive entries');
  $draft->setElementData('song', 'second')->save();
  archive_check($archive->total() === 0, 'Edits after clear do not repopulate archive');
  WebformSubmission::create(['webform_id' => $form->id(), 'data' => ['song' => 'second']])->save();
  archive_check($archive->total() === 1, 'New requests still captured after clear');
  $response = $controller->csv(Request::create('/'), 'entries');
  ob_start();
  $response->sendContent();
  $raw = ob_get_clean();
  $raw_lines = explode("\n", trim(substr($raw, 3)));
  archive_check(count($raw_lines) === 2 && str_getcsv($raw_lines[1], ',', '"', '') === ["'=Formula example"], 'Individual CSV contains only song titles and protects formula labels');
  $switcher = \Drupal::service('account_switcher');
  $switcher->switchTo(\Drupal\user\Entity\User::load(1));
  try {
    $confirm = \Drupal::formBuilder()->getForm(\Drupal\lkb_song_archive\Form\ClearArchiveForm::class);
    archive_check(!empty($confirm['form_token']) && (string) $confirm['actions']['submit']['#value'] === 'Yes, clear the archive', 'Clear requires CSRF-protected explicit confirmation');
    $settings = \Drupal::service('entity.form_builder')->getForm($form, 'settings');
    archive_check(isset($settings['third_party_settings']['lkb_song_archive']['song_field']['#options']['song']), 'Future Webform exposes song field and opt-in settings');
  }
  finally {
    $switcher->switchBack();
  }

}
finally {
  $transaction->rollBack();
  \Drupal::configFactory()->reset();
  foreach (['webform', 'webform_submission', 'node', 'user_role'] as $type) {
    \Drupal::entityTypeManager()->getStorage($type)->resetCache();
  }
}
archive_check($archive->total() === $before, 'Fixture data and clear operation rolled back; existing archive restored');
