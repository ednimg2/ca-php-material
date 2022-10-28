<?php
$start = hrtime(true);
date_default_timezone_set('Europe/Vilnius');
//echo time(); //1666948459

echo date('Y-m-d') . PHP_EOL; // 2022-10-28
echo date('Y-m-d H:i:s T' . PHP_EOL); // 2022-10-28 12:18:30

echo date('r');

//$date = new DateTime('2022-10-27 01:15');
/*$date = new DateTime();

echo $date->format('Y-m-d H');
//var_dump($date);*/

$date = date_create_from_format('Ymd H:i:s', '20120102 15:05:12');
var_dump($date);

$date = new DateTime();
var_dump($date->format('Y-m-d'));

$date->modify('+10days');
var_dump($date->format('Y-m-d'));

$date->modify('-10days');
var_dump($date->format('Y-m-d'));

$startDate = $date->format('Y-m-d');
$endDate = $date->modify('+5days')->format('Y-m-d');

var_dump($startDate, $endDate);

$startDate = (new DateTime())->modify('-5days')->format('Y-m-d');
$endDate = (new DateTime())->modify('+5days')->format('Y-m-d');

var_dump($startDate, $endDate);

$date = new DateTime();

var_dump($date->setTime(03,0)->format('H:i:s'));
var_dump($date->modify('-5minute')->format('Y-m-d H:i:s'));
var_dump($date->modify('+1year')->format('Y-m-d H:i:s'));
var_dump($date->modify('-1month')->format('Y-m-d H:i:s'));
var_dump($date->modify('+5days')->format('Y-m-d H:i:s'));

$date1 = new DateTime('2022-10-28');
$date2 = new DateTime('2022-11-03');

var_dump($date1 <= $date2);

$ticketValidDate = new DateTime('2022-10-28 13:00:00');
$dateNow = new DateTime();

var_dump($ticketValidDate > $dateNow);

$blogCreatedDate = new DateTime('2022-10-27 12:45:43');
$dateNow = new DateTime();

$dateInterval = $blogCreatedDate->diff($dateNow);
//dateInterval = $dateNow->diff($blogCreatedDate);

var_dump($dateInterval);
var_dump($dateInterval->format('%d days, %H hours, %i minutes, %s seconds'));

/*$start = hrtime(true);
sleep(2);
$end = hrtime(true);
$duration = $end - $start;
echo $duration / 1000000;*/

$end = hrtime(true);
$duration = $end - $start;
echo $duration / 1000000;

