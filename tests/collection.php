<?php

require_once("../chipdeals-mobile-money-api.php");


$momo = new Momo();
$momo->setApiKey("test_FOdigzgSopV8GZggZa89");

$transaction = $momo
  ->collect()
  ->amount(100)
  ->currency("XOF")
  ->from("22990630401")
  ->firstName("Iyam")
  ->lastName("EVERICH")
  ->create();

$status = $transaction->getStatus();

if ($status == "pending") {
  echo "transaction started and is pending <br/><pre>";
  print_r($transaction->getArray());
} else {
  echo "transaction failed";
}
