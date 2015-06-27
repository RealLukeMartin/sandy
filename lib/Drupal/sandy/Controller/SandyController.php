<?php
/**
 * @file
 * Contains \Drupal\sandy\Controller\sandyController.
 */
namespace Drupal\sandy\Controller;
use

Drupal\Core\Controller\ControllerBase;
/**
 * Controller routines for sandy module routes.
 */
class SandyController extends ControllerBase {
 

/**
   * Return the 'Sandy Box' page.
   *
   * @return string
   *   A render array containing our 'sandy World' page content.
   */
  public function sandyWorld() {
    $output = array();
   

$output['sandy'] = array(
      '#markup' => 'Sandy Box!',
    );
    return

$output;
  }
}