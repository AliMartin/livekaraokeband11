<?php

namespace Drupal\custom_homepage\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns the homepage route content.
 */
final class HomepageController extends ControllerBase {

  /**
   * Homepage callback.
   */
  public function home(): array {
    // Intentionally empty: the page is composed from blocks placed in regions
    // (with visibility set to only show on /home).
    return [
      '#markup' => '',
      '#cache' => [
        // Usually safe to cache normally; block caching handles the heavy lifting.
        // Add contexts/tags here only if you later add dynamic controller content.
      ],
    ];
  }

}