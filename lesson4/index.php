<?php

define('VAT', 1.21);

/*function sum(float $a, float $b): float
{
    return $a + $b;
}

echo sum(2, 4.5);*/

/*$a = 9;

function sum(): float
{
    $a = 5;
    $b = 8.5;

    return $a + $b;
}

var_dump($a);

var_dump(sum());*/

/*$a = 9;

function sum(): float
{
    global $a; // nepatartina naudoti
    $b = 8.5;

    return $a + $b;
}

var_dump(sum());*/

/*function sum(float $a, float $b): float
{
    return $a + $b;
}

var_dump(sum(5, 2));
var_dump(sum(3, 3));*/

/*var_dump(calculatePriceWithVat(10));

function calculatePriceWithVat(float $price): float
{
    return $price * VAT;
}

var_dump(calculatePriceWithVat(10));*/

/*function showVatText(bool $isVat): string
{
    if ($isVat) {
        return 'Taip';
    }

    return 'Ne';
}

var_dump(showVatText(true));
var_dump(showVatText(false));*/

/*function calculatePrice(float $price): float
{
    return $price * VAT;
}

var_dump(calculatePrice(100));
var_dump(calculatePrice([100]));*/

/*function sum(float $a, float $b = 0): float
{
    return $a + $b;
}

var_dump(sum(3));

function sum2(float $a, float $b, float $c = 0, float $d = 1): float
{
    return $a + $b + $c + $d;
}

var_dump(sum2(4, 4, 0, 3));*/

/*function sum(float $a, ?float $b): float
{
    if ($b === null) {
        return 0;
    }

    return $a + $b;
}

var_dump(sum(3, null));*/

/*function sum(float $a, ?float $b): ?float
{
    if ($b === null) {
        return null;
    }

    return $a + $b;
}

var_dump(sum(3, null));*/

/*function printText(string $text): void
{
    echo $text;
}

printText('Hello');*/

/*$greeting = 'Hello';

function returnGreeting(string &$greeting): string
{
    $greeting .= 'world';

    return $greeting;
}

var_dump(returnGreeting($greeting));
var_dump($greeting);*/

/*$result = function (int $a): int
{
    return $a ** 2;
};

var_dump($result(4));
var_dump($result(5));*/

/*$cacheKey = 'cache_key';

$cachedData = function () use ($cacheKey) {
    $cachedData = [];

    if ($cacheKey === 'cache_key') {
        $cachedData = [1, 2, 3, 4];
    }

    return $cachedData;
};

var_dump($cachedData());*/


/*$cachedData = function ($cacheKey) {
    $cachedData = [];

    if ($cacheKey === 'cache_key') {
        $cachedData = [1, 2, 3, 4];
    }

    return $cachedData;
};

var_dump($cachedData('cache_key'));*/

/*function sum(int $a, int $b): int
{
    $c = function () use ($b) {
        return $b ** 2;
    };

    return $a + $b + $c();
}

var_dump(sum(2, 2));*/

/*function text(string $a): string
{
    return $a;
}

$result = text('text');*/

function arrayPrinter(array $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

arrayPrinter(['tekstas 1', 'tekstas 2', 'tekstas 3']);
