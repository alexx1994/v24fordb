<?php

/**
 * @file
 * Contains \Drupal\v24fordb_current_time\CurrentTimeController.
 */

namespace Drupal\v24fordb_ct\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class CtController.
 */
class CtController extends ControllerBase {
  /**
   * Current time.
   *
   * @return string
   *   Return Current time.
   */
  public function content() {
    return [
      '#theme' => 'ct',
      '#current_time' => $this->GetCurrentTime(),
    ];
  }

  function GetCurrentTime() {
    $today = date("F j, Y, G:i");

    return $today;
  }
}
