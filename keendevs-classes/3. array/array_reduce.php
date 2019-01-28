<?php 

$animals = array("Cat", "Dog", "Fox", "Cow");


// $filter = array_filter($animals, 'stringbys');

// var_dump($filter);
// $str = implode("-", $animals);
// $str1 = join("=", $animals);

function strigify_array($old, $new){
    $filter = $old['0']=='C';

    return $filter;
}

function sum($old, $new){
    return $old[0]='c' . "=" .  $new;
}

$strigified = array_reduce($animals, "strigify_array");

var_dump($strigified);