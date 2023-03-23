<?php

declare(strict_types = 1);

namespace CurrencyConversion\Unit;

use CurrencyConversion\Runner\Runner;
use CurrencyConversion\Services\DollarService;
use PHPUnit\Framework\TestCase;

final class RunnerTest extends TestCase
{
    public function testRun()
    {
        $dollarService = new DollarService(1000);
        $runner = new Runner($dollarService);
        $actual = $runner->run();

        $this->assertSame(7.3, $actual);
    }
}
