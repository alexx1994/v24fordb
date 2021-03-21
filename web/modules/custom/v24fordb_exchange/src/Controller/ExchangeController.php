<?php

/**
 * @file
 * Contains \Drupal\v24fordb_exchange\ExchangeController.
 */

namespace Drupal\v24fordb_exchange\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ExchangeController.
 */
class ExchangeController extends ControllerBase {
  /**
   * Exchange rate.
   *
   * @return array
   *   Return Exchange rate.
   */
  public function content() {
    return array (
      '#theme' => 'exchange',
      '#test' => $this->GetExchange(),
    );
  }

  public function GetExchange() {
//    $url = "https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5";

//    $json = file_get_contents($url);
//    $result = json_decode($json);

//    ksm($result);

//    return $result;
    return '';
  }
}
