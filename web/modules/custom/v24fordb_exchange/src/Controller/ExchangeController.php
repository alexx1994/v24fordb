<?php

namespace Drupal\v24fordb_exchange\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ExchangeController returns for Exchange routes..
 */
class ExchangeController extends ControllerBase {

  /**
   * Prepare content for the response.
   *
   * @return array
   *   The Exchange rate label.
   */
  public function content() {
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
