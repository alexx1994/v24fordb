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
    return [
      '#theme' => 'exchange',
      '#items' => $this->getExchange(),
    ];
  }

  /**
   * Get and return Exchange rate.
   *
   * @return array
   *   Return usd and eur to uah exchage rate.
   */
  public function getExchange() {
    $url = "https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5";

    $json = file_get_contents($url);
    $full_result = json_decode($json);

    if ($full_result) {
      $result = array_slice($full_result, 0, 2);
    }

    return $result;
  }

}
