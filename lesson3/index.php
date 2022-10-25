<?php

define('VAT', 1.21);
/*
$isVat = false;
$price = 10;

if ($isVat) {
    $price *= VAT;
    //$price = $price * 1.21;
}

echo $price;*/

/*$a = 5;
$b = 3;
if ($a > $b) {
    echo 'Taip';
} else {
    echo 'Ne';
}*/

/*$a = 5;
$b = 3;

if ($a === $b) {
    echo 'Taip, ' . $a . ' lygu ' . $b;
} else {
    echo 'Ne, ' . $a . ' nelygu ' . $b;
}*/

/*$a = 4;

if ($a === 4) {
    echo '1 salyga';
} elseif ($a > 2) {
    echo '2 salyga';
} else {
    echo 'Neatitiko nei vienos salygos';
}*/

/*$isVat = true;
$price = 199;
$shippingPrice = 5;

if ($isVat && $price >= 200) {
    $price *= VAT;
} elseif ($isVat && $price < 200) {
    $price = ($price + $shippingPrice) * VAT;
    //$price += $shippingPrice;
    //$price *= VAT;
} else {
    $price += $shippingPrice;
}

echo 'Kaina: ' . $price;*/

/*$dayOfTheWeek = 'friday';
switch ($dayOfTheWeek) {
case 'monday':
    echo 'this is the beginning of the week';
    break;
case 'friday':
    echo 'Yay, weekend begins';
    break;
case 'sunday':
    echo 'Work tomorrow';
    break;
default:
    echo 'Weekday was not recognised';
    break;
}*/

// 0, 1, 2, 3
/*$status = 1;
switch ($status) {
    case 0:
        $labelStyle = 'red';
        break;
    case 1:
        $labelStyle = 'blue';
        break;
    case 2:
        $labelStyle = 'green';
        break;
    default:
        $labelStyle = 'yellow';
        break;
}

echo '<h3 class="label-'. $labelStyle .'">Status</h3>';*/

/*$dayOfTheWeek = 'monday';
$response = match ($dayOfTheWeek) {
    'monday' => 'this is the beginning of the week',
    'friday' => 'Yay, weekend begins',
    'sunday' => 'Work tomorrow', // tik viena eilutė
    default => 'Weekday was not recognised',
};
echo $response;*/

/*$i = 0;

$weekdays = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];

while ($i < 5) {
    //echo $i . PHP_EOL;
    echo $weekdays[$i] . PHP_EOL;
    ++$i;
}*/

/*$i = 0;

while ($i < 4) {
    echo $i . PHP_EOL;
    ++$i;
}

echo PHP_EOL;

$i = 0;

do {
    echo $i . PHP_EOL;
    ++$i;
} while ($i < 4);*/

/*for ($i = 0; $i < 4; ++$i) {
    echo $i . PHP_EOL;
}*/

$weekdays = [
    'Monday',
    'weekday2' => 'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];

/*foreach ($weekdays as $value) {
    echo $value . PHP_EOL;
}

foreach ($weekdays as $key => $value) {
    echo $key . ' - ' . $value . PHP_EOL;
}*/

foreach ($weekdays as $value) {
    if ($value == 'Wednesday') {
        continue;
    }

    echo $value . PHP_EOL;
}
