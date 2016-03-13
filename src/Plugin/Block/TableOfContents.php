<?php

/**
 * @file
 * Contains \Drupal\tocify\Plugin\Block\TableOfContents.
 */

namespace Drupal\tocify\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'TableOfContents' block.
 *
 * @Block(
 *  id = "tocify_table_of_contents",
 *  admin_label = @Translation("Table of contents"),
 * )
 */
class TableOfContents extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['selector'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Selector'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['selector']) ? $this->configuration['selector'] : '',
      '#maxlength' => 256,
      '#size' => 64,
      '#weight' => '0',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['selector'] = $form_state->getValue('selector');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    // TODO
    $selector = $this->configuration['selector'];
    return array(
      '#type' => 'inline_template',
      '#template' => '<div id="tocify"></div>',
      '#attached' => [
        'library' => ['tocify/tocify']
      ]
    );
  }

}
