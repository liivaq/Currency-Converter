<?php

require_once 'vendor/autoload.php';

$info = new \App\CurrencyInfo();
$currencies = $info->getData();

$userInput = 'AUD';

foreach ($currencies->Currencies->Currency as $currency){
    if($currency->ID === $userInput){
        echo $currency->ID;
    }
}

