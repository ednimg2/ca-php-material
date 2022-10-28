<?php

/*var_dump(strlen('Hello'));

$string = '---Hello-World---';

var_dump(trim($string, '-'));

$string2 = 'Hello' . PHP_EOL;

var_dump($string2);
var_dump(trim($string2));

$string3 = '    Tab   ';

var_dump($string3);
var_dump(trim($string3));

$string4 = ' Spaces ';

var_dump($string4);
var_dump(trim($string4));

$string5 = '**Hello-World--';
var_dump(trim($string5, '*-'));

$string6 = '**Hello-World**';
var_dump(ltrim($string6, '*'));
var_dump(rtrim($string6, '*'));
var_dump($string6);

$string6 = trim($string6, '*');
var_dump($string6);*/

/*function trim_value(string &$value): void
{
    $value = trim($value, '*');
}

$string = '**Hello**';
trim_value($string);
var_dump($string);*/

/*var_dump(ucfirst('hello world'));
var_dump(lcfirst('HELLO'));

var_dump(strtolower('ABCDEFGH'));
var_dump(strtoupper('abcdefgh'));
var_dump(strtoupper('aBcdEfgh*$'));

$string = 'table-desk-chair-apple-pear';

var_dump(explode('-', $string));
var_dump(explode('-', $string, 2));
var_dump(explode('-', $string, 0));
var_dump(explode('-', $string, -2));*/

/*$startTime = '9:00';
$endTime = '13:00';

echo 'Mūsų paskaitos vyksta nuo ' . $startTime .' iki ' . $endTime . PHP_EOL;
echo sprintf('Mūsų paskaitos vyksta nuo %s iki %s', $startTime, $endTime) . PHP_EOL;

$firstNumber = 1;
$lastNumber = 10;

echo sprintf('Įveskite skaičius nuo %d iki %d', $firstNumber, $lastNumber);*/

//var_dump(str_contains('Hello world', 'world'));

/*$sentence = 'Quick fox jumps over the lazy dog.';
$isSegmentFound = str_starts_with($sentence, 'Quick');
$isSegmentFoundOnTheEnd = str_ends_with($sentence, 'dog');

var_dump($isSegmentFound);*/

/*$email = 'mailname@domain.com';

var_dump(strstr($email, '@'));
var_dump(strstr('Kaina: 34', ':'));*/

/*$string = 'LT1000349586';
$string2 = 'LT3456EE901';

var_dump(substr($string, 2)); // nukerpa du pirmus simbolius ir atvaizduoja likusi rezultata
var_dump(substr($string, 2, 4));  // nukerpa pirmus 2 simbolius ir atvaizduoja 4 toliau einancius simbolius
var_dump(substr($string, 0, 4));
var_dump(substr($string, 0, -4)); // nukerpa nuo galo keturis simbolius
var_dump(substr($string, 2, -4));
var_dump(substr($string2, 2, -5));

$phone = '+37066010000';
var_dump(substr($phone, 0, -8));*/

$string = 'Quick fox jumps over the lazy dog';

/*var_dump(str_split($string));
var_dump(str_split(str_replace(' ', '', $string)));

var_dump(str_split($string, 2));*/


var_dump(str_replace(' ', '', $string));
var_dump(str_replace('fox', 'cat', $string));

$sentence = 'I like eat pizza, donuts and drink cola';

$search = ['pizza', 'donuts', 'cola'];
$replace = ['vegetables', 'chicken', 'juice'];

var_dump(str_replace($search, $replace, $sentence));
var_dump(str_replace(['i', 'e'], ['I', 'E'], $sentence));

$string2 = 'Lorem*%dolor$sentence#';
var_dump(str_replace(['$','%','*','#'], ' ', $string2));

