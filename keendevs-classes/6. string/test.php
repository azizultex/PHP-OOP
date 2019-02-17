<?php


// ["Mango Aubergin", "Banana Spinach", "Jackfruits Cauliflower"];


$f = ["Mango", "Banana", "Jackfruits"];
$v = ["Aubergin", "Spinach", "Cauliflower"];

// $fRevers = array_map("strrev", $fruites);

// print_r($fRevers);

function my_array($n,$m){
    return($n." ".$m);
}
$d = array_map("my_array",$f,$v);
print_r($d);


