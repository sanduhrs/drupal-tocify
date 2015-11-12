<?php

/**
 * @file
 * Contains \Drupal\wiki\Plugin\Block\TocifyTOCBlock.
 */

namespace Drupal\tocify\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Tocify: Table of Contents' block.
 *
 * @Block(
 *   id = "tocify_toc",
 *   subject = @Translation("Table of Contents"),
 *   admin_label = @Translation("Table of Contents")
 * )
 */
class TocifyTOCBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'inline_template',
      '#template' => '<div id="tocify"></div>',
      '#attached' => [
        'library' => ['tocify/tocify']
      ]
    );
  }

}
