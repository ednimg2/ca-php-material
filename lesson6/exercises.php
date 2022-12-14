<?php

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}

$cities = getCities();

// Exercises #1
/*$allCitiesPopulation = 0;

foreach ($cities as $city) {
    if ($city['population'] > 25000000) {
        $allCitiesPopulation += $city['population'];
    }
}

var_dump($allCitiesPopulation);*/

// Exercises #2

/*$populations = array_column($cities, 'population');
$allCitiesPopulation = array_sum($populations);
var_dump($allCitiesPopulation);*/

// Exercises #3

/*$allCitiesPopulation = array_reduce(
    $cities,
    function (?int $population, array $city): int {
        $population += $city['population'];

        return $population;
    }
);

var_dump($allCitiesPopulation);*/

// Exercises #4

/*$allCitiesPopulation = array_reduce(
    $cities,
    function (?int $population, array $city): int {
        if ($city['population'] > 25000000) {
            $population += $city['population'];
        }

        return $population;
    }
);

var_dump($allCitiesPopulation);*/

// Excercises #5

/*$biggerCities = array_filter(
    $cities,
    function (array $city): bool {
        if ($city['population'] > 25000000) {
            return true;
        }

        return false;
    }
);

var_dump($biggerCities);*/

// Exercises #6

//633

/*$lowPriceItems = ['t-shirt', 'shoes'];

$orderItems = [
    [
        'name' => 't-shirt',
        'priceRegular' => 15,
        'priceLow' => 13,
        'quantity' => 3,
    ],
    [
        'name' => 'coat',
        'priceRegular' => 74,
        'priceLow' => 60,
        'quantity' => 6,
    ],
    [
        'name' => 'shirt',
        'priceRegular' => 25,
        'priceLow' => 20,
        'quantity' => 2,
    ],
    [
        'name' => 'shoes',
        'priceRegular' => 115,
        'priceLow' => 100,
        'quantity' => 1,
    ],
];

$allCartPrice = array_reduce(
    $orderItems,
    function (?float $cartPrice, array $item) use ($lowPriceItems) {
        if (in_array($item['name'], $lowPriceItems)) {
            $cartPrice += $item['priceLow'] * $item['quantity'];
            return $cartPrice;
        }

        $cartPrice += $item['priceRegular'] * $item['quantity'];
        return $cartPrice;
    }
);

var_dump($allCartPrice);*/

$arr = [];

function functionName(int $n)
{
    // body
}

functionName(4);

if (1 === 1) {
    // body
}

foreach ($arr as $a) {
    // body
}

$a = in_array('7', [6]);

$reduce = array_reduce(
    $arr,
    function (?int $a, array $item) {
        return $a + $item['count'];
    }
);

/*
Sukategorizuokite ip adres?? s??ra????.
ipsNew - ip i?? $newIpList, kuri?? n??ra $existingIpList
ipsOld - ip i?? $existingIpList, kuri?? n??ra $newIpList
ipsRemaining - ip, kurie egzistuoja abiejuose s??ra??uose
funkcija butu kvie??iam taip:
exercise4(
    ['15.1.2.1', '16.1.8.1', '15.1.8.1']
);
*/

function ipResults(array $newIpList)
{
    $existingIpList = [
        '1.17.2.1',
        '15.1.2.1',
        '1.9.2.1',
        '1.1.98.1',
        '1.1.2.12',
        '1.11.2.1',
        '122.1.2.1',
        '1.31.2.1',
        '33.12.2.1',
    ];

    return [
        'ipsNew' => array_diff($newIpList, $existingIpList),
        'ipsOld' => array_diff($existingIpList, $newIpList),
        'ipsRemaining' => array_intersect($newIpList, $existingIpList),
    ];
}

var_dump(ipResults(['15.1.2.2', '1.9.2.6', '122.1.2.1']));


function getShoppingCart(): array
{
    return [
        'products' => [
            'Comfy chair' => 'no data',
            'Yellow lamp' => [
                'price' => 15.3,
                'quantity' => 2,
            ],
            'Didzioji sofa' => [
                'pavadinimas' => 'Didzioji sofa',
                'kaina' => 'trylika eur??'
            ],
            'Softest rug' => [
                'price' => 27.3,
                'quantity' => 3,
                'discount' => 13,
            ],
            'Blue shelf' => [],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];
}
// Visose u??duotyse stenkit??s naudoti array funkcijas

function exercise1(): void
{

    /*
    I??spausdinti vis?? krep??elio produkt?? pavadinimus vienoje eilut??je.
    Comfy chair, Yellow lamp, Didzioji sofa, Softest rug, Blue shelf
    */
}

function exercise2(): float
{
    /*
    Suskai??iuokite pirkim?? krep??elio bendr?? sum?? (price * quantity)
    Kaip matote, krep??elio duomenys, kuriuos gavome i?? svetimos sistemos, yra netvarkingi.
    - Skai??iuojant reik??t?? atsi??velgti tik ?? produktus, kurie turi laukus 'price' ir 'quantity'.
    Jeigu produkto laukai u??vadinti kitais pavadinimais arba i?? viso j?? neturi, t?? produkt?? reikia ignoruoti.

    */

    return 0;
}

function exercise3(): float
{

    /*
    Suskai??iuokite pirkini?? krep??elio bendr?? sum??.
    Galioja tos pa??ios salygos kaip ir funkcijoje exercise2, bet papildomai reikia:
    - Skai??iuojant bendr?? sum?? pritaikyti nuolaidas.
    Nuolaida laikoma 'cartDiscounts' masyve, taip pat nuolaida gali b??ti ir prie produkto - 'discount'.
    Abi reik??m??s yra i??reik??tos procentais.
    Nuolaidos sumuojasi.
    Krep??elio nuolaida taikoma bendrai krep??elio sumai.
    Naudojama tik viena, did??iausia su krep??eliu susieta nuolaida ('cartDiscounts').
    */

    return 0;
}


