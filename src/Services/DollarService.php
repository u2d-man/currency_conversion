<?php

declare(strict_types = 1);

namespace CurrencyConversion\Services;

class DollarService
{
    // Values as of 2023/03/04 1:16 are used as a sample. $1 = 136 JPY
    const ONE_USD = 0.73;

    public function __construct(private int $convertValue)
    {
    }

    /**
     * convert JPY to USD.
     *
     * @return float
     */
    public function convert(): float
    {
        return self::ONE_USD * ($this->convertValue / 100);
    }
}
