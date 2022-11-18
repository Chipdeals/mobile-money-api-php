<?php

require_once("../chipdeals-mobile-money-api.php");


$momo = new Momo();
$momo->setApiKey("test_FOdigzgSopV8GZggZa89");

$balances =  $momo->getBalances();

foreach ($balances as $balanceKey => $balance) {
  echo $balance->getCountryCode() . "<br/>";
  echo $balance->getOperator() . "<br/>";
  echo $balance->getCurrency() . "<br/>";
  echo $balance->getAmount() . "<br/>";

  echo "<pre>";
  print_r($balance->getArray());
  echo "</pre><br/>";
}
