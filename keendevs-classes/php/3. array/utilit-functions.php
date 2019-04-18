<?php 

// array_walk is used to print or echo array items like foreach or for loop
// array_map is used to return a new array 
// array_filter is used to filter data from an array


$aa = array(1, 2, 3, 4, 5);

// foreach($aa as $a){
//     echo $a*2;
//     echo PHP_EOL;
// }

function double($n){
    return $n*2;
}
$bb = array_map(function($n){
    return $n*2;
}, $aa);
print_r($bb);


// $result = array();

// $aa = array(1,2,3,4,5);

// foreach($aa as $a){
// //    array_push($result,$a*2);
//     $result[$a];

// }
// var_dump($result);



