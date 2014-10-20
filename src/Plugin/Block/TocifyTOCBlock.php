<?php

/**
 * @file
 * Contains \Drupal\wiki\Plugin\Block\WikiTOCBlock.
 */

namespace Drupal\tocify\Plugin\Block;

use \Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Tocify: Table of Contents' block.
 *
 * @Block(
 *   id = "tocify_toc",
 *   subject = @Translation("Tocify: Table of Contents"),
 *   admin_label = @Translation("Tocify: Table of Contents")
 * )
 */
class TocifyTOCBlock extends BlockBase {

  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => t('<div id="tocify"></div>'),
      '#attached' => array(
        'js' => array(
          drupal_get_path('module', 'tocify') . '/tocify.js' => array(),
          drupal_get_path('module', 'tocify') . '/jquery.tocify.js' => array(),
        ),
        'css' => array(
          drupal_get_path('module', 'tocify') . '/jquery.tocify.css' => array(),
        ),
      ),
    );
  }

}
