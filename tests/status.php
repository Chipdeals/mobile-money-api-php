<?php

require_once("../chipdeals-mobile-money-api.php");



$momo = new Momo();
$momo->setApiKey("test_FOdigzgSopV8GZggZa89");


$transaction = $momo->getStatus("a0903015-a86d-46c3-98ce-bb36639d6d09");

echo $transaction->getReference() . "<br/>";
echo $transaction->getPhoneNumber() . "<br/>";
echo $transaction->getCountryCode() . "<br/>";
echo $transaction->getOperator() . "<br/>";
echo $transaction->getFirstName() . "<br/>";
echo $transaction->getLastName() . "<br/>";
echo $transaction->getOriginalCurrency() . "<br/>";
echo $transaction->getOriginalAmount() . "<br/>";
echo $transaction->getCurrency() . "<br/>";
echo $transaction->getAmount() . "<br/>";
echo $transaction->getStatus() . "<br/>";
echo $transaction->getStatusMessage() . "<br/>";
echo $transaction->getStatusCode() . "<br/>";
echo $transaction->getStartTimestampInSecond() . "<br/>";
echo $transaction->getEndTimestampInSecond() . "<br/>";
echo $transaction->checkIsCollection() . "<br/>";
echo $transaction->getOperatorReference() . "<br/>";

echo "<pre>";
print_r($transaction->getArray());
echo "</pre>";
