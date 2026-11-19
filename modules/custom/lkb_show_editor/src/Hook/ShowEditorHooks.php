<?php

namespace Drupal\lkb_show_editor\Hook;

use Drupal\Core\Entity\ContentEntityFormInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Hook\Order\OrderAfter;

/**
 * Show-only presentation changes; Scheduler retains ownership of its fields.
 */
final class ShowEditorHooks {

  #[Hook('form_alter', order: new OrderAfter(['scheduler', 'field_layout']))]
  public function formAlter(array &$form, FormStateInterface $form_state, string $form_id): void {
    $object = $form_state->getFormObject();
    if (!$object instanceof ContentEntityFormInterface) {
      return;
    }
    $entity = $object->getEntity();
    if ($entity->getEntityTypeId() !== 'node' || $entity->bundle() !== 'show' || !isset($form['field_song_list'])) {
      return;
    }
    // Filter only this Show widget, preserving categories and current references.
    $webforms = \Drupal::entityTypeManager()->getStorage('webform')->loadMultiple();
    foreach ($form['field_song_list']['widget'] ?? [] as $delta => $widget) {
      if (!is_int($delta) || !isset($widget['target_id']['#options'])) {
        continue;
      }
      $current = (string) ($entity->get('field_song_list')->get($delta)?->target_id ?? '');
      $form['field_song_list']['widget'][$delta]['target_id']['#options'] = $this->openOptions($widget['target_id']['#options'], $webforms, $current);
    }
    foreach (array_keys($form) as $key) {
      if (!preg_match('/^scheduler_settings(?:_\d+)?$/', $key)) {
        continue;
      }
      // Retain the DOM ID, attachments, access rules and child grouping needed
      // by Scheduler, but remove the visible/collapsible details presentation.
      $form[$key]['#type'] = 'container';
      unset($form[$key]['#title'], $form[$key]['#open'], $form[$key]['#group']);
      $form[$key]['#weight'] = ($form['field_song_list']['#weight'] ?? 0) + 0.5;
      if (isset($form['field_song_list']['#group'])) {
        // Use the same Field Layout region so the wrapper cannot sort above
        // the whole content column, regardless of its configured field weight.
        $form[$key]['#group'] = $form['field_song_list']['#group'];
      }
    }
  }

  /**
   * Keep open forms and, for safe editing, an already-referenced closed form.
   */
  private function openOptions(array $options, array $webforms, string $current): array {
    $filtered = [];
    foreach ($options as $id => $label) {
      if (is_array($label)) {
        $children = $this->openOptions($label, $webforms, $current);
        if ($children) {
          $filtered[$id] = $children;
        }
      }
      elseif (isset($webforms[$id]) && $webforms[$id]->isOpen()) {
        $filtered[$id] = $label;
      }
      elseif ((string) $id === $current && isset($webforms[$id])) {
        $filtered[$id] = \Drupal::translation()->translate('@label (current selection — closed)', ['@label' => $label]);
      }
    }
    return $filtered;
  }

}
