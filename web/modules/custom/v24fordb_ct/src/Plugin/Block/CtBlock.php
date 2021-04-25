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
      '#current_time' => $this->GetCurrentTime(),
    ];
  }

  function GetCurrentTime() {
    $today = date("F j, Y, G:i");

    return $today;
  }
}
