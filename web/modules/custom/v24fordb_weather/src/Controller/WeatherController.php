<?php

namespace Drupal\v24fordb_weather\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WeatherController returns for Weather routes.
 */
class WeatherController extends ControllerBase {

  /**
   * Prepare content for the response.
   *
   * @return array
   *   The Weather label.
   */
  public function content() {
    return [
      '#theme' => 'weather',
    ];
  }

}
