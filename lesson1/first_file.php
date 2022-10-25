<?php

$price = 10;
var_dump($price ? 'Yes': 'No'); // Yes
$price = null;
var_dump($price ? 'Yes': 'No'); // No
$price = 10;
var_dump($price ?? 'No'); // 10
$price = null;
var_dump($price ?? 0); // 0
