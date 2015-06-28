<?php
/**
 * @file
 * Contains \Drupal\sandy\Form\SandyForm.
 */

namespace Drupal\sandy\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Sandy form.
 */
class SandyForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'sandy_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#required' => TRUE,
    );
    $form['video'] = array(
      '#type' => 'textfield',
      '#title' => t('Favorite Actor/Actress'),
    );
    $form['develop'] = array(
      '#type' => 'checkbox',
      '#title' => t('Do you like Kevin Spacey too?'),
    );
    $form['description'] = array(
      '#type' => 'textarea',
      '#title' => t('Write a story about your favorite moment, or dont, its cool.'),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
        // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }
  }
}