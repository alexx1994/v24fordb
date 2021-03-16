<?php

namespace Drupal\v23fordb_weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'weather' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Hello World"),
 * )
 */
class WeatherBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      'weather' => array(),
    ];
  }

}
