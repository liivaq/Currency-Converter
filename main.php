<?php

require_once 'vendor/autoload.php';

$currency = strtoupper(readline('Enter currency to convert to: '));
$amount = (float)readline('Enter amount: ');

$converter = new \App\CurrencyConverter();

echo $amount.' EUR to '.$currency.' = '.$converter->convertCurrency($amount, $currency).PHP_EOL;

