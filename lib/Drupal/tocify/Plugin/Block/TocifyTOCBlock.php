<?php

/**
 * @file
 * Contains \Drupal\wiki\Plugin\Block\WikiTOCBlock.
 */

namespace Drupal\tocify\Plugin\Block;

use Drupal\block\Annotation\Block;
use Drupal\block\BlockBase;
use Drupal\Core\Annotation\Translation;

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
        'library' => array(
          array('tocify', 'tocify'),
        ),
      ),
    );
  }

}
