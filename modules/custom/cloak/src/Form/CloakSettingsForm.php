<?php

namespace Drupal\cloak\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

final class CloakSettingsForm extends ConfigFormBase {

  public function getFormId(): string {
    return 'cloak_settings_form';
  }

  protected function getEditableConfigNames(): array {
    return ['cloak.settings'];
  }

  public function buildForm(array $form, FormStateInterface $form_state): array {
    $config = $this->config('cloak.settings');

    $form['enabled'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Cloaking'),
      '#default_value' => (bool) $config->get('enabled'),
      '#description' => $this->t('When enabled, the body class "icarus-on" is added. When disabled, "icarus-off" is added.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $this->configFactory()->getEditable('cloak.settings')
      ->set('enabled', (bool) $form_state->getValue('enabled'))
      ->save();

    // Force cache reset so the new body class is seen immediately.
    drupal_flush_all_caches();

    parent::submitForm($form, $form_state);
  }

}