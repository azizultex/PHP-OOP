<?php

$str = "Hello World,World How are you?";

$tok = strtok($str, ",");
$str2 = "Sabbir cheaf cooks good dishes.";
$tok1 = strtok($str2, " ");
$tok2 = strtok(" ");
// $tok3 = strtok(" ");
// $tok4 = strtok(" ");
// $tok5 = strtok(" ");
// $tok6 = strtok(" ");
var_dump($tok);
var_dump($tok1);
var_dump($tok2);
// var_dump($tok3);
// var_dump($tok4);
// var_dump($tok5);
// var_dump($tok6);

// $loopTok = strtok($str, " ,");

// while( $loopTok !== false ){
// 	echo $loopTok . PHP_EOL;
// 	$loopTok = strtok("");
// }

// $split = str_split($str);
// var_dump($split);

// $occurance = array_count_values($split);

// var_dump($occurance);


// var_dump(array_count_values(str_split($str)));