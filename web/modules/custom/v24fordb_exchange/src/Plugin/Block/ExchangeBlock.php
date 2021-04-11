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
      '#items' => $this->GetExchange(),
    ];
  }

  function GetExchange() {
    $url = "https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5";

    $json = file_get_contents($url);
    $result = json_decode($json);

    if ($result) {
      $lenght = count($result);
      unset($result[$lenght - 1]);
    }

    return $result;
  }

}
