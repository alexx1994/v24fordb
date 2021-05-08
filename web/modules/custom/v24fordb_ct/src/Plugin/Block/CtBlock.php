<?php

namespace Drupal\v24fordb_ct\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'current time' Block.
 *
 * @Block(
 *   id = "current_time_block",
 *   admin_label = @Translation("Current time"),
 *   category = @Translation("Custom"),
 * )
 */
class CtBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
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
  public function getCurrentTime() {
    $today = date("F j, Y, G:i");

    return $today;
  }

}
