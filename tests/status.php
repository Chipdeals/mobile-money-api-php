<?php

require_once("../chipdeals-mobile-money-api.php");



$momo = new Momo();
$momo->setApiKey("test_FOdigzgSopV8GZggZa89");


$transaction = $momo->getStatus("a0903015-a86d-46c3-98ce-bb36639d6d09");

echo "reference: " . $transaction->getReference() . "<br/>";
echo "merchantOrderId: " . $transaction->getMerchantOrderId() . "<br/>";
echo "phoneNumber: " . $transaction->getPhoneNumber() . "<br/>";
echo "countryCode: " . $transaction->getCountryCode() . "<br/>";
echo "operator: " . $transaction->getOperator() . "<br/>";
echo "firstName: " . $transaction->getFirstName() . "<br/>";
echo "lastName: " . $transaction->getLastName() . "<br/>";
echo "originalCurrency: " . $transaction->getOriginalCurrency() . "<br/>";
echo "originalAmount: " . $transaction->getOriginalAmount() . "<br/>";
echo "currency: " . $transaction->getCurrency() . "<br/>";
echo "amount: " . $transaction->getAmount() . "<br/>";
echo "status: " . $transaction->getStatus() . "<br/>";
echo "statusMessage: " . $transaction->getStatusMessage() . "<br/>";
echo "statusCode: " . $transaction->getStatusCode() . "<br/>";
echo "startTimestampInSecond: " . $transaction->getStartTimestampInSecond() . "<br/>";
echo "endTimestampInSecond: " . $transaction->getEndTimestampInSecond() . "<br/>";
echo "ckIsCollection: " . $transaction->checkIsCollection() . "<br/>";
echo "operatorReference: " . $transaction->getOperatorReference() . "<br/>";
echo "paymentLink: " . $transaction->getPaymentLink() . "<br/>";

echo "<pre>";
print_r($transaction->getArray());
echo "</pre>";
