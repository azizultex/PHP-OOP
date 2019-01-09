<?php 

// $t = "hindi";
// echo $movies[$t];

// $movi = $movies ;
// foreach($movi as $mo => $value){
//     echo $mo;
//     echo PHP_EOL;
//     echo $value;
//     echo PHP_EOL;

// }

$movies = [
    'bangla'=>'aynabaji',
    'tamil' =>'magadira',
    'hindi' =>'simba',
    'english'=>'avatar'

];
$single_movie = array_keys($movies);
for($i=0;$i<count($single_movie);$i++){
   echo $single_movie[$i]." = ".$movies[$single_movie[$i]];
   echo PHP_EOL;
}

