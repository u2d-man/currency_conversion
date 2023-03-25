<?php

declare(strict_types = 1);

namespace CurrencyConversion\Dto;

class ExchangeRateDto
{
    public function __construct(
        public readonly float $jpy
    ) {}
}
