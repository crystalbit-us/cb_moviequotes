<?php

namespace Drupal\cb_moviequotes\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "cb_moviequotes_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("cb_moviequotes")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
