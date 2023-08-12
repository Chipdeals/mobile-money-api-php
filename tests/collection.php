<?php

require_once("../chipdeals-mobile-money-api.php");


$momo = new Momo();
$momo->setApiKey("test_FOdigzgSopV8GZggZa89");

$transaction = $momo
  ->collect()
  ->amount(100)
  ->currency("XOF")
  ->from("2250704628575")
  ->firstName("Iyam")
  ->lastName("EVERICH")
  ->isWaveAccount(false) //optional. Required only for CI wave operator
  ->merchantOrderId("collection-test00001") //optional. If added we will check if it is uniq for your account
  ->create();

$status = $transaction->getStatus();

if ($status == "pending") {
  echo "transaction started and is pending <br/><pre>";
  print_r($transaction->getArray());
} else {
  echo "transaction failed <br/><pre>";
  print_r($transaction->getArray());
}
