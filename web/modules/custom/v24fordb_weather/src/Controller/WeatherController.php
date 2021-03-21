<?php

/**
 * @file
 * Contains \Drupal\v24fordb_weather\WeatherController.
 */

namespace Drupal\v24fordb_weather\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WeatherController.
 */
class WeatherController extends ControllerBase {
  /**
   * Weather.
   *
   * @return array
   *   Return Weather.
   */
  public function content() {
    return array (
      '#theme' => 'weather',
    );
  }
}
