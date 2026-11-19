<?php

namespace Drupal\lkb_song_archive\Form;

use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * POST-only, CSRF-protected archive deletion with explicit confirmation.
 */
final class ClearArchiveForm extends ConfirmFormBase {

  public function getFormId(): string {
    return 'lkb_song_archive_clear';
  }

  public function getQuestion() {
    return $this->t('Are you sure you want to clear all @count archived requests?', ['@count' => \Drupal::service('lkb_song_archive.archive')->total()]);
  }

  public function getDescription() {
    return $this->t('This permanently deletes every archived song entry, including any added before you confirm. It does not delete audience submissions or change Webforms. Existing requests will not be imported again on later edits. Download a CSV first if you want to keep the history.');
  }

  public function getCancelUrl(): Url {
    return Url::fromRoute('lkb_song_archive.report');
  }

  public function getConfirmText() {
    return $this->t('Yes, clear the archive');
  }

  public function buildForm(array $form, FormStateInterface $form_state): array {
    $form = parent::buildForm($form, $form_state);
    $form['#cache']['max-age'] = 0;
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state): void {
    \Drupal::service('lkb_song_archive.archive')->clear();
    $this->messenger()->addStatus($this->t('The song request archive has been cleared.'));
    $form_state->setRedirectUrl($this->getCancelUrl());
  }

}
