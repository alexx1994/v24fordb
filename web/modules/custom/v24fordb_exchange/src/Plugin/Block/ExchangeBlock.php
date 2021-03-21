<?php

namespace Drupal\v24fordb_exchange\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'exchange rate' Block.
 *
 * @Block(
 *   id = "exchange_block",
 *   admin_label = @Translation("Exchange rate"),
 *   category = @Translation("Custom"),
 * )
 */
class ExchangeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array (
      '#theme' => 'exchange',
    );
  }

}
