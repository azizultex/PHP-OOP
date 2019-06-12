<?php 

function developer( array $list){
    array_walk($list, function($name){
        printf("Programmer %s from Keendevs \n", $name);
    });
}

// developer(["Sabbir", "Joynul", "Jakir"]);

// developer("Azizul");

function sum(int $a, int $b){
    return $a+$b;
}

echo sum(6, "five");


