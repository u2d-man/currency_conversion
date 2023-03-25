<?php

declare(strict_types = 1);

namespace CurrencyConversion\Http;

use CurrencyConversion\Dto\ExchangeRateDto;
use Symfony\Component\HttpClient\HttpClient;

class Client
{
    public function getExchangeRate(): ExchangeRateDto
    {
        $client = HttpClient::create();

        $client = $client->withOptions([
            'headers' => ['Content-Type' => 'text/plain', 'apikey' => getenv('EXCHANGE_API_KEY')],
        ]);

        $response = $client->request(
            'GET',
            'https://api.apilayer.com/exchangerates_data/latest?symbols=JPY&base=USD',
        );

        $content = $response->toArray();

        return new ExchangeRateDto($content['rates']['JPY']);
    }
}
