<?php

require_once("./chipdeals-mobile-money-api.php");



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


42+35
// $transaction = $momo
//     ->collect()
//     ->amount(100)
//     ->currency("XOF")
//     ->from("22990630401")
//     ->firstName("Iyam")
//     ->lastName("EVERICH")
//     ->create();

// $status = $transaction->getStatus();

// if ($status == "pending") {
//     echo "transaction started and is pending <br/><pre>";
//     print_r($transaction->getArray());
// } else {
//     echo "transaction failed";
// }




// $transaction = $momo
//     ->deposit()
//     ->amount(2000)
//     ->currency("XOF")
//     ->to('22990630401')
//     ->create();

// $status = $transaction->getStatus();

// if ($status == "pending") {
//     echo "transaction started and is pending <br/><pre>";
//     echo "<pre>";
//     print_r($transaction->getArray());
// } else {
//     echo "transaction failed";
// }





// $transaction = $momo->getStatus("a0903015-a86d-46c3-98ce-bb36639d6d09");

// echo $transaction->getReference() . "<br/>";
// echo $transaction->getPhoneNumber() . "<br/>";
// echo $transaction->getCountryCode() . "<br/>";
// echo $transaction->getOperator() . "<br/>";
// echo $transaction->getFirstName() . "<br/>";
// echo $transaction->getLastName() . "<br/>";
// echo $transaction->getOriginalCurrency() . "<br/>";
// echo $transaction->getOriginalAmount() . "<br/>";
// echo $transaction->getCurrency() . "<br/>";
// echo $transaction->getAmount() . "<br/>";
// echo $transaction->getStatus() . "<br/>";
// echo $transaction->getStatusMessage() . "<br/>";
// echo $transaction->getStatusCode() . "<br/>";
// echo $transaction->getStartTimestampInSecond() . "<br/>";
// echo $transaction->getEndTimestampInSecond() . "<br/>";
// echo $transaction->checkIsCollection() . "<br/>";

// echo "<pre>";
// print_r($transaction->getArray());
// echo "</pre>";






// $transaction = $momo->parseWebhookData($_POST);

// echo $transaction->getReference() . "<br/>";
// echo $transaction->getPhoneNumber() . "<br/>";
// echo $transaction->getCountryCode() . "<br/>";
// echo $transaction->getOperator() . "<br/>";
// echo $transaction->getFirstName() . "<br/>";
// echo $transaction->getLastName() . "<br/>";
// echo $transaction->getOriginalCurrency() . "<br/>";
// echo $transaction->getOriginalAmount() . "<br/>";
// echo $transaction->getCurrency() . "<br/>";
// echo $transaction->getAmount() . "<br/>";
// echo $transaction->getStatus() . "<br/>";
// echo $transaction->getStatusMessage() . "<br/>";
// echo $transaction->getStatusCode() . "<br/>";
// echo $transaction->getStartTimestampInSecond() . "<br/>";
// echo $transaction->getEndTimestampInSecond() . "<br/>";
// echo $transaction->checkIsCollection() . "<br/>";
// print_r($transaction->getArray());
