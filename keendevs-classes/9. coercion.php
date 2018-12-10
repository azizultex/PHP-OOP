<?php

// $str1 = "string one" + 5;

// echo $str1;

// explicit type change using function

$x = "666";
$y = intval($x);
$z = floatval($x);
echo "Y \n";
echo $y;
echo gettype($y);
echo "\n";
echo "Z \n";
echo $z;
echo gettype($z);

// explicit type change using type casting

echo "\n";
echo "type casting \n";
$j = (double)$x;
echo gettype($j);

// implicit type change / coercion in php
echo "\n";
echo "coercion \n";
$m = $x + 0;
echo $m;
echo gettype($m);