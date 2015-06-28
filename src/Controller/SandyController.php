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
}
