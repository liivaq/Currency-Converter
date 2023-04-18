<?php

namespace App;
use GuzzleHttp\Client;

class CurrencyInfo {
    private \GuzzleHttp\Client $client;

    public function __construct(){
        $this->client = new Client();
    }

    function getData(){
        $data = "https://www.latvijasbanka.lv/vk/ecb.xml";
        return simplexml_load_string($this->client->get($data)->getBody()->getContents());
    }

}