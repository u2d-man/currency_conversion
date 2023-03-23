<?php

declare(strict_types = 1);

namespace CurrencyConversion\Runner;

use CurrencyConversion\Services\DollarService;

class Runner
{
    private DollarService $dollarService;

    public function __construct($dollarService) {
        $this->dollarService = $dollarService;
    }

    public function run()
    {
        return $this->dollarService->convert();
    }
}
