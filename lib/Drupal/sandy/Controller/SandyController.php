<?php
 
namespace Drupal\sandy\Controller;
 
use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
 
class SandyController implements ControllerInterface {
 
  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }
 
  /**
   * This will return the output of the sandy page.
   */
  public function sandyPage() {
    return array(
      '#markup' => t('Sandy box demo'),
    );
  }
 
}