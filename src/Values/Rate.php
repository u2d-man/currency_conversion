<?php

namespace CurrencyConversion\Values;

class Rate
{
    // Values as of 2023/03/04 1:16 are used as a sample. $1 = 136 JPY
    const USD_RATE = 0.73;

    // inputJpy is allow up to 9 digits.
    const MAX_LENGTH = 9;

    private int $inputJpy;

    public function __construct(int $inputJpy)
    {
        $this->inputJpy = $inputJpy;
    }

    public function value(): int
    {
        return $this->inputJpy;
    }
}
