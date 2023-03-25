<?php

declare(strict_types = 1);

namespace CurrencyConversion\Runner;

use CurrencyConversion\Services\DollarService;

class Runner
{
    public function __construct(private DollarService $dollarService) 
    {
    }

    public function run()
    {
        return $this->dollarService->convert();
    }
}
