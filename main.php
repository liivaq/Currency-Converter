<?php

require_once 'vendor/autoload.php';

$currency = strtoupper(readline('Enter currency to convert to: '));
$amount = (float)readline('Enter amount: ');

$converter = new \App\CurrencyConverter();
$result = $converter->convertCurrency($amount, $currency);

if ($result) {
    echo $amount . ' EUR to ' . $currency . ' = ' . $result . PHP_EOL;
} else {
    echo 'Sorry, no information found about ' . $currency . PHP_EOL;
}

