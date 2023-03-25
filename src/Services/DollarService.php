<?php

declare(strict_types = 1);

namespace CurrencyConversion\Services;

use CurrencyConversion\Http\Client;

class DollarService
{
    public function __construct(private int $convertValue)
    {
    }

    /**
     * convert USD to JPY.
     *
     * @return float
     */
    public function convert(): float
    {
        $client = new Client();
        $exchangeRate = $client->getExchangeRate();

        return $exchangeRate->jpy * $this->convertValue;
    }
}
