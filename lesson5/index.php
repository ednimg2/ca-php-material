<?php

/*$array = [1, 2, 3, 4, 5];

$array2 = [];
$array2[] = 3;
$array2[] = 1;

var_dump($array2);

$dataArray = [
    'bmw',
    'audi',
    'kia'
];*/

/*$bmw = [
    'marke' => 'Bmw',
    'modelis' => 'E39',
    'spalva' => 'juoda',
    'modelis' => 'E61',
];

$audi = [
    'marke' => 'Audi',
    'modelis' => 'A4',
    'spalva' => 'raudona',
];

$kia = [];
$kia['marke'] = 'Kia';
$kia['modelis'] = 'Ceed';
$kia['spalva'] = 'melyna';
$kia['modelis'] = 'ProCeed';*/

/*$bmw = [
    'marke' => 'Bmw',
    'modelis' => 'E39',
    'spalva' => 'juoda',
];

$audi = [
    'marke' => 'Audi',
    'modelis' => 'A4',
    'spalva' => 'raudona',
    'parent' => $bmw
];

$garage = [
    'masina1' => $bmw,
    'masina2' => $audi,
];

var_dump($garage);*/

/*$audi = [
    'marke' => 'Audi',
    'modelis' => 'A4',
    'spalva' => 'raudona',
];

unset($audi['modelis']);

var_dump($audi);

$array = [1,2,3,4,5,6];
unset($array[3]);

var_dump($array);*/

//$array = [3,4,5,6];
/*$array = [];
$array['modelis'] = 'Audi A4';
$array[] = 'nera rakto';
$array['marke'] = 'Audi';
$array[] = 'elementas be rakto';

var_dump($array);*/

/*$shop = [
    [
        'name' => 'Utenos 1',
        'price' => 1.2,
    ],
    [
        'name' => 'Utenos 2',
        'price' => 1.4,
        'discount' => 0.2
    ],
    [
        'name' => 'Utenos 3',
        'price' => 0.4,
    ]
];

unset($shop[1]['discount']);
var_dump($shop);*/

/*foreach ($shop as $product) {
//    $price = function () use ($product): float
//    {
//        if (isset($product['discount'])) {
//            return $product['price'] - $product['discount'];
//        }
//
//        return $product['price'];
//    };

    //echo $product['name'] . ' : ' . ' Kaina: ' . $product['price'] . ' Kaina su nuolaida: ' . calculatePriceWithDiscount($product) . PHP_EOL;
    echo sprintf('%s : Kaina: %s Kaina su nuolaida: %s', $product['name'], $product['price'], calculatePriceWithDiscount($product)) . PHP_EOL;
}

function calculatePriceWithDiscount(array $product): float
{
    if (isset($product['discount'])) {
        return $product['price'] - $product['discount'];
    }

    return $product['price'];
}*/

//var_dump($shop);

/*$bmw = [
    'marke' => 'Bmw',
    'modelis' => 'E39',
    'spalva' => 'juoda',
];

$audi = [
    'marke' => 'Audi',
    'modelis' => 'A4',
    'spalva' => 'raudona',
];

$garage = [
    $bmw,
    'masina2' => $audi,
];

unset($garage[0]['modelis']);
//unset($garage['masina1']['modelis']);
//unset($garage['masina2']);

var_dump($garage);*/

$array1 = [1, 2, 3, 'tekstas'];
$array1[] = 'papildomas';
foreach ($array1 as $item) {
    echo $item . PHP_EOL;
}

//var_dump($array1);

$array2 = [
    'raktas1' => 1,
    'raktas2' => 2,
    'raktas3' => 3,
];
$array2['raktas4'] = 'dar vienas elementas';

foreach ($array2 as $key => $item) {
    echo $key . ' - ' .$item . PHP_EOL;
}
//var_dump($array2);

$array = [
    $array1,
    $array2,
    [2, 4, 5],
];
$array[] = 'tekstas';

echo '--------' . PHP_EOL;
foreach ($array as $item) {
    if (is_array($item)) {
        echo 'Array' . PHP_EOL;
        continue;
    }

    echo $item . PHP_EOL;
}
//var_dump($array);



