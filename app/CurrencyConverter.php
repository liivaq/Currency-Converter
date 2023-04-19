<?php

namespace App;
use GuzzleHttp\Client;

class CurrencyConverter {
    private Client $client;

    public function __construct(){
        $this->client = new Client();
    }

    public function getData(){
        $data = "https://www.latvijasbanka.lv/vk/ecb.xml";
        return  simplexml_load_string($this->client->get($data)->getBody()->getContents());
    }

    public function convertCurrency($amount, $id){
        $data = $this->getData();
        foreach ($data->Currencies->Currency as $currency){
            if($currency->ID == $id){
                return $amount * $currency->Rate;
            }
        }
        return null;
    }
}