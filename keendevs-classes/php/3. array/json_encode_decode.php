<?php

// json_encode, json_decode
// JSON.stringify(), JSON.parse()

$students = [
    [
        "name"  => "Zoynul",
        "age"   => 28
    ],
    [
        "name" => "Azizul",
        "age"  => 28
    ]
];

// echo $students;
// print_r($students);

$encoded = json_encode($students);
echo $encoded;
// print_r($encoded);

$decoded = json_decode($encoded);
// echo $decoded;
print_r($decoded);


$prom_languages = "PHP;JavaScript; C;C++; Visual Basic; Swift";
// // print_r(explode("",$prom_languages));
// $result = preg_split("\;|; \", $prom_languages);
// echo $result;
// $result = explode("; ", $prom_languages);
// print_r($result[0]);

$pattan = "/;\s|;/";
$myArray = preg_split($pattan, $prom_languages);
print_r($myArray);
echo PHP_EOL;
print_r($myArray[1]);
echo PHP_EOL;

$jsonData = json_encode($myArray);
print_r($jsonData);
echo PHP_EOL;

$convertedArray = json_decode($jsonData);
print_r($convertedArray);
echo PHP_EOL;
print_r($convertedArray[1]);
echo PHP_EOL;

