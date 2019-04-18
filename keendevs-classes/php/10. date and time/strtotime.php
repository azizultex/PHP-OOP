<?php

$now = time();
$sabbir = strtotime("24 Jan, 1994");
$suman = strtotime("02 Aug, 1994");

// echo $sabbir;
// echo PHP_EOL;
// echo $suman;
// echo PHP_EOL;
echo date("Y", $sabbir);
echo PHP_EOL;
echo date("Y");
echo PHP_EOL;
$age = date("Y") -date("Y", $sabbir);
echo "Sabbir's Age: " . $age;

