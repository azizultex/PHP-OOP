<?php 

$num = [3, 5, 7, 9];

// foreach($num as $n){
//     echo $n*$n . PHP_EOL;
        // multiPlyByTwo($n);
// }

function multiPlyByTwo($n){
    echo $n*2 . PHP_EOL;
}

array_walk($num, function($n){
    echo $n*2 . PHP_EOL;
});

// multiPlyByTwo(4);


// $str = "What's up guys?";
// echo $str[6];
echo PHP_EOL;
$i = [12,14,36,15];

// function square($n){
//     echo $n*$n;
//     echo PHP_EOL;
// }

// array_walk($i,function($n){
// echo $n*$n;
// echo PHP_EOL;
// });

if(in_array(13,$i)){
    echo "12 number is avialble";
}else{
    echo "No number is found";
}