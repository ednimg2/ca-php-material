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


/*var_dump(str_replace(' ', '', $string));
var_dump(str_replace('fox', 'cat', $string));

$sentence = 'I like eat pizza, donuts and drink cola';

$search = ['pizza', 'donuts', 'cola'];
$replace = ['vegetables', 'chicken', 'juice'];

var_dump(str_replace($search, $replace, $sentence));
var_dump(str_replace(['i', 'e'], ['I', 'E'], $sentence));

$string2 = 'Lorem*%dolor$sentence#';
var_dump(str_replace(['$','%','*','#'], ' ', $string2));*/


/*$emails = [
    'some@email.com',
    'someAemail.com',
    'another@gmail.com',
    'notAreal.email.com',
    'real@gmail.com',
];

function exercise2(array $emails): array
{
    $filteredEmails = array_filter(
        $emails,
        function (string $email): bool {
            if ((bool) strstr($email, '@')) {
                return true;
            }

            return false;
        }
    );

    return $filteredEmails;
}

function exercise_best_practice(array $emails): array
{
    return array_filter(
        $emails,
        function (string $email): bool {
            return (bool) strstr($email, '@');
        }
    );
}

var_dump(exercise2($emails));
var_dump(exercise_best_practice($emails));*/

/*$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];

function exercise4(array $products): int
{
//
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
//    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
//    Naudokite $someProducts masyvą.
//
    return array_reduce(
        $products,
        function (int $sum, string $product) {
            $sum += strlen(
                trim($product)
            );

            return $sum;
        },
        0
    );
}

var_dump(exercise4($someProducts));*/

//var_dump(mb_substr_count('Suskaičiuokite ir grąžinkite visų', 't'));

/*function exercise5(): int
{
    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
    The concept emphasises the significance of our community and shared humanity and teaches
    us that "A person is a person through others". Many view the philosphy as a counterweight
    to the culture of individualism in our contemporary world.';

    return preg_match_all('/[aeiouy]/i', $text);
}

var_dump(exercise5());*/

/*$str = 'abcdef';
$shuffled = str_shuffle($str);

// This will echo something like: bfdaec
echo $shuffled;*/

/*$text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
    The concept emphasises the significance of our community and shared humanity and teaches
    us that "A person is a person through others". Many view the philosphy as a counterweight
    to the culture of individualism in our contemporary world.';

var_dump(str_word_count($text)); // grazina count'a
var_dump(str_word_count($text, 1)); // grazina zodziu masyva
var_dump(str_word_count($text, 2)); // grazina zodziu masyva, key sumuojamas su simboliu count'u*/