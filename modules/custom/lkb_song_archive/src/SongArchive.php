<?php

namespace Drupal\lkb_song_archive;

use Drupal\Component\Utility\Html;
use Drupal\Core\Database\Connection;
use Drupal\Core\Database\Query\Merge;
use Drupal\Core\Database\Query\SelectInterface;
use Drupal\Core\Form\OptGroup;
use Drupal\webform\WebformSubmissionInterface;

/**
 * Song-only storage with separate, unlinkable capture receipts.
 */
final class SongArchive {

  public function __construct(private readonly Connection $database) {}

  /**
   * Capture once, including draft completion, inside the submission transaction.
   *
   * Subsequent edits intentionally retain the originally requested song.
   */
  public function capture(WebformSubmissionInterface $submission): bool {
    $form = $submission->getWebform();
    if (!$submission->id() || $submission->isDraft() || !$form->getThirdPartySetting('lkb_song_archive', 'enabled', FALSE)) {
      return FALSE;
    }
    if ($this->database->select('lkb_song_archive_receipt', 'r')->condition('sid', $submission->id())->countQuery()->execute()->fetchField()) {
      return FALSE;
    }
    $field = $form->getThirdPartySetting('lkb_song_archive', 'song_field', '');
    $element = $form->getElementInitialized($field);
    if (($element['#type'] ?? '') !== 'select' || !empty($element['#multiple'])) {
      throw new \UnexpectedValueException('Song archive requires a single-choice select field.');
    }
    $value = $submission->getElementData($field);
    if ($value === NULL || $value === '') {
      return FALSE;
    }
    if (!is_scalar($value)) {
      throw new \UnexpectedValueException('Song archive requires one selected song.');
    }
    $options = OptGroup::flattenOptions($element['#options'] ?? []);
    if (!array_key_exists((string) $value, $options)) {
      throw new \UnexpectedValueException('Song archive could not resolve the selected song label.');
    }
    $song = trim(preg_replace('/\s+/u', ' ', Html::decodeEntities(strip_tags((string) $options[$value]))));
    if ($song === '' || mb_strlen($song) > 512) {
      throw new \UnexpectedValueException('Song archive label must contain between 1 and 512 characters.');
    }
    $transaction = $this->database->startTransaction();
    try {
      // A unique source-side receipt handles repeat saves and concurrent capture.
      // It contains no archive ID and is removed when its source is deleted.
      $result = $this->database->merge('lkb_song_archive_receipt')
        ->key('sid', $submission->id())
        ->insertFields(['sid' => $submission->id()])
        ->execute();
      if ($result !== Merge::STATUS_INSERT) {
        return FALSE;
      }
      $this->database->insert('lkb_song_archive')->fields(['song' => $song])->execute();
    }
    catch (\Throwable $e) {
      $transaction->rollBack();
      throw $e;
    }
    return TRUE;
  }

  public function total(): int {
    return (int) $this->database->select('lkb_song_archive')->countQuery()->execute()->fetchField();
  }

  /**
   * Query shared by report and summary CSV; inputs never become SQL identifiers.
   */
  public function summary(string $search = '', string $sort = 'popular'): SelectInterface {
    $query = $this->database->select('lkb_song_archive', 'a')->fields('a', ['song']);
    $query->addExpression('COUNT(*)', 'requests');
    $query->groupBy('a.song');
    if ($search !== '') {
      $query->condition('a.song', '%' . $this->database->escapeLike($search) . '%', 'LIKE');
    }
    if ($sort !== 'title') {
      $query->orderBy('requests', 'DESC');
    }
    return $query->orderBy('a.song', 'ASC');
  }

  /**
   * Clear archive entries only. Receipts prevent later edits repopulating it.
   */
  public function clear(): void {
    $this->database->delete('lkb_song_archive')->execute();
  }

}
