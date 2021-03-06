<?php
/**
 * @file
 * Contains \Drupal\sandy\Controller\SandyController.
 */

namespace Drupal\sandy\Controller;

use Drupal\Core\Controller\ControllerBase;

class SandyController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('dat page tho'),
    );
  }
  public function config() {
    return array(
        '#type' => 'markup',
        '#markup' => t('Sandy creates a page at <a href="/sandy">/sandy</a>'),
    );
  }
}
