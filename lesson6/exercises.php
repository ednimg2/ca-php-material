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
    $allCitiesPopulation += $city['population'];
}

echo $allCitiesPopulation;*/

// Exercises #2

/*$populations = array_column($cities, 'population');
$allCitiesPopulation = array_sum($populations);
var_dump($allCitiesPopulation);*/

// Exercises #3