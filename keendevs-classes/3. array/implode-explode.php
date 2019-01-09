<?php 
// explode, implode, join, preg_split, preg_match

$str = "Rubel Sabbir Kakku Jakir SB";

$explodeItem = explode('; ', $str);
$pattern = "/\s/";
$pregsplitItem = preg_split($pattern, $str);
$pregmatch = preg_match($pattern, $str);

print_r($pregsplitItem);


// foreach( $arrayItems as $person ){
//     echo $person;
//     echo PHP_EOL;
// }


$movies = array(
    "Bangla",
    "English",
    "Hindi",
    "Bollywood"
);
// print_r($movies);

// $moviesAsStr = implode("?", $movies);
$moviesAsStr = join("?", $movies);
// echo $moviesAsStr;
// $str = 'A little brown fox jump over the lazy dog';
// $strtoarray = explode(' ', $str);
// var_dump($strtoarray);
