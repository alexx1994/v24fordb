<?php

namespace Drupal\v24fordb_weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'weather' Block.
 *
 * @Block(
 *   id = "weather_block",
 *   admin_label = @Translation("Weather"),
 *   category = @Translation("Custom"),
 * )
 */
class WeatherBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array (
      '#theme' => 'weather',
    );
  }

}
