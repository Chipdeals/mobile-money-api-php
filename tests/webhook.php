<?php

require_once("./chipdeals-mobile-money-api.php");



$momo = new Momo();


$transaction = $momo->parseWebhookData($_POST);

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
print_r($transaction->getArray());
