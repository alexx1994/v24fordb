<?php

namespace Drupal\v24fordb_ct\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for ct module routes.
 */
class CtController extends ControllerBase {

  /**
   * Route title callback.
   *
   * @return array
   *   The ct label.
   */
  public function content() {
    return [
      '#theme' => 'ct',
      '#current_time' => $this->getCurrentTime(),
    ];
  }

  /**
   * Get and return Current time.
   *
   * @return string
   *   Return usd and eur to uah exchage rate.
   */
  private function getCurrentTime() {
    $today = date("F j, Y, G:i");

    return $today;
  }

}
