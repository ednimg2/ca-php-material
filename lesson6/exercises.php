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
Sukategorizuokite ip adresų sąrašą.
ipsNew - ip iš $newIpList, kurių nėra $existingIpList
ipsOld - ip iš $existingIpList, kurių nėra $newIpList
ipsRemaining - ip, kurie egzistuoja abiejuose sąrašuose
funkcija butu kviečiam taip:
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


