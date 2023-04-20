<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\CurrencyConverter;

$currency = strtoupper(readline('Enter currency to convert to: '));
$amount = (float)readline('Enter amount: ');

$converter = new CurrencyConverter();
$result = $converter->convertCurrency($amount, $currency);

if ($result) {
    echo $amount . ' EUR to ' . $currency . ' = ' . number_format($result, 2) . PHP_EOL;
} else {
    echo 'Sorry, no information found about ' . $currency . PHP_EOL;
}

