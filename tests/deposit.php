<?php

require_once("../chipdeals-mobile-money-api.php");



$momo = new Momo();
$momo->setApiKey("test_FOdigzgSopV8GZggZa89");

$transaction = $momo
    ->deposit()
    ->amount(2000)
    ->currency("XOF")
    ->to('22990630401')
    ->create();

$status = $transaction->getStatus();

if ($status == "pending") {
    echo "transaction started and is pending <br/><pre>";
    echo "<pre>";
    print_r($transaction->getArray());
} else {
    echo "transaction failed";
}
