<?php

require_once __DIR__ . '/vendor/autoload.php';

use CurrencyConversion\Runner\Runner;
use CurrencyConversion\Services\DollarService;

if (array_key_exists(1, $argv) === false) {
    echo "Run-time error: Specify the first argument.";
    return 1;
}

$convertValue = (int) $argv[1];

$dollarService = new DollarService($convertValue);
$runner = new Runner($dollarService);

printf("Converted $convertValue USD to JPY. output: ¥%f", $runner->run());
