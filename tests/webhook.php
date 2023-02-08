<?php

require_once("./chipdeals-mobile-money-api.php");



$momo = new Momo();


$transaction = $momo->parseWebhookData($_POST);

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
print_r($transaction->getArray());
