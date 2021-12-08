<?php

namespace Drupal\cb_moviequotes\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for cb_moviequotes routes.
 */
class CbMoviequotesController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
