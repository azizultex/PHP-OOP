<?php

// echo, print, printf, sprintf;

define("PERCENTAGE", 50);
$myPrint = sprintf("Your rate is: %s", PERCENTAGE);
echo "\n";
echo $myPrint;

// echo "\n";

// $pp = print("sdfdsf");
// print "HEY";

// echo $pp;

// $a1 = "Nice";
// $a2 = "Sun";
// // $aupper = strtoupper($a1);
// echo "The sky is looking strtoupper($a1)";
// echo "\n";
// printf("The sky is looking %s but the %s is about to set", strtoupper($a1), $a2);

// printf("Printf, Your percentage is: %d", PERCENTAGE);


echo "\n";
$title = "Hello World";
$description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et rem voluptatum eveniet iusto placeat laborum expedita velit quis, perspiciatis fuga dolores reiciendis obcaecati rerum quibusdam quo doloribus necessitatibus nihil vero!";

$output = '<div class=\"wrapper\"><h1>{$title}</h1><p>{$description}</p></div>';

$output2 = sprintf('<div class="wrapper"><h1>%2$s</h1><p>%1$s</p></div>', $title, $description);

echo $output2;


// Decimal
0123456789

// Octal
01234567
02634

// Hexadecimal
0123456789ABCDEF
0xC334

// Binary
0110001

