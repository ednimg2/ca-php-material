<?php

$array = [1, 2, 3, 4];
$not_array = 4;
/*var_dump(is_array($not_array));

if (is_array($array)) {
    foreach ($array as $item) {
        echo $item . PHP_EOL;
    }
}*/

//var_dump(count($array));

/*$empty_array = [];

if (is_array($not_array) && count($not_array) > 0) {
    echo 'Masyvas netuscias';
}*/

/*$cars = [
    'bmw',
    'audi',
    'kai',
    'toyota',
    [
        1,
        2,
        3
    ]
];

//var_dump($cars);

var_dump(in_array('1', $cars, true));
var_dump(array_search('audi', $cars, true));*/

/*$cars = [
    'bmw',
    'audi',
    'kai',
    'toyota',
];

//var_dump(array_rand($cars));

//$randKey = array_rand($cars);

//echo $cars[array_rand($cars)];

//var_dump(array_rand($cars, 2));

$randomCars = array_rand($cars, 3);

foreach ($randomCars as $item) {
    echo $cars[$item] . PHP_EOL;
}

var_dump(array_rand([]));*/

$cars = [
    'automobilis1' => 'bmw',
    'automobilis2' => 'audi',
    'automobilis3' => 'toyota',
    'automobilis4' => 'kia',
];

//asort($cars);

//var_dump($cars);

//var_dump(array_values($cars));
//var_dump(array_keys($cars));

/*$product = [
    'name' => 'Pavadinimas',
    'price' => 100,
    'discount' => 10,
    'color' => 'red'
];

var_dump(array_keys($product));*/

//audi-bmw-kia
/*$text = null;

foreach ($cars as $item) {
    $text .= $item;
    if ($item != end($cars)) {
        $text .= '-';
    }
}

echo $text . PHP_EOL;

echo implode('-', $cars);*/

/*$text = 'a-b-c-d-e-f-g-h';
$text2 = 'abcdefgh';

var_dump(explode('-', $text));
var_dump(explode('-', $text, 3));
//var_dump(str_split($text2));*/

/*$array = [1, 2, "3", 5, "5", 3, 2, "4"];
//var_dump(array_unique($array));

$array2 = [
    3 => 'red',
    '2t' => 'apple',
    1 => 'red',
    4 => 'blue'
];

var_dump(array_unique($array2));
//var_dump(array_unique($array2, SORT_ASC));*/

$array1 = ['apple', 'orange', 'peach', 'kiwi'];
$array2 = ['apple', 'peach', 'pear', 'strawberry'];

//var_dump(array_diff($array1, $array2));

//var_dump(array_intersect($array1, $array2));

/*var_dump(array_merge($array1, $array2));
var_dump(array_merge($array1, $array2, [2], [3, 5]));*/

$products = [
    [
        'name' => 'name 1',
        'price' => 20,
    ],
    [
        'name' => 'name 2',
        'price' => 45,
    ],
];

/*foreach ($products as $key => $product) {
    $products[$key]['count'] = 0;
}

var_dump($products);*/

/*$modifiedProductList = array_map(
    function (array $product): array {
        if ($product['price'] < 40) {
            $product['count'] = 0;
        }

        return $product;
    },
    $products
);

//var_dump($products);
//var_dump($modifiedProductList);

$modifiedProductList2 = array_map(
    'addCountOnProduct',
    $products
);

var_dump($modifiedProductList2);

function addCountOnProduct(array $product): array
{
    if ($product['price'] < 40) {
        $product['count'] = 0;
    }

    return $product;
}

$a = [1, 2, 3, 4, 5];
$b = array_map(
    function (int $n): int {
        return $n ** 2;
    },
    $a
);

var_dump($b);*/

$products = [
    [
        'name' => 'name 1',
        'price' => 20,
    ],
    [
        'name' => 'name 2',
        'price' => 45,
    ],
];

$allPrice = array_reduce(
    $products,
    function (?float $price, array $product): ?float
    {
        $price += $product['price'];

        return $price;
    },
);

$allPrice2 = null;
foreach ($products as $product) {
    $allPrice2 += $product['price'];
}

var_dump($allPrice);
var_dump($allPrice2);

$a = [1, 2, 3, 4, 5, 6];

$even = array_filter(
    $a,
    function (int $n): int {
        return !($n & 1);
    }
);

$odd = array_filter(
    $a,
    function (int $n): int {
        return $n & 1;
    }
);

var_dump($even);
var_dump($odd);

$products = [
    [
        'name' => 'name 1',
        'price' => 20,
    ],
    [
        'name' => 'name 2',
        'price' => 45,
    ],
    [
        'name' => 'name 3',
        'price' => 35,
    ],
    [
        'name' => 'name 4',
        'price' => 15,
    ],
];

$newProductList = array_filter(
    $products,
    function (array $product): bool {
        if ($product['price'] > 30) {
            return true;
        }

        return false;
    }
);

var_dump($newProductList);


