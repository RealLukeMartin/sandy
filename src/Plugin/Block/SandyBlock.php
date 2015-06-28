<?php
/**
 * @file
 * Contains \Drupal\sandy\Plugin\Block\SandyBlock.
 */
 
namespace Drupal\sandy\Plugin\Block;
 
use Drupal\Core\Block\BlockBase;
use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
 
/**
 * Provides a 'Sandy: empty block' block.
 *
 * @Block(
 *   id = "sandy_simple_block",
 *   subject = @Translation("Sandy box block"),
 *   admin_label = @Translation("Sandy box block")
 * )
 */
class SandyBlock extends BlockBase {
   
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    return array(
      '#markup' => t('Simple Sandy block data'),
    );
    return Drupal::formBuilder()->getForm('Drupal\search\Form\SearchBlockForm');
  }
 
}