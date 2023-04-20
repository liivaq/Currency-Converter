<?php declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;

class CurrencyConverter
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getData(): object
    {
        $data = "https://www.latvijasbanka.lv/vk/ecb.xml";
        return simplexml_load_string($this->client->get($data)->getBody()->getContents());
    }

    public function convertCurrency($amount, $id): ?float
    {
        $data = $this->getData();
        foreach ($data->Currencies->Currency as $currency) {
            if ($currency->ID == $id) {
                return (float)number_format($amount * $currency->Rate, 2);
            }
        }
        return null;
    }
}