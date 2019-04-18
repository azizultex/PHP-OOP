<?php 

// convert string to array 
// Diaper,Nudules,Oil,Flower - Shirts,Pants,Shoe - Fish Curry,Biriani,Chicken - Para,Chomchom,Iranibhok

$multidymentions = explode(' - ','Diaper,Nudules,Oil,Flower - Shirts, Pants;Shoe - Fish Curry,Biriani,Chicken - Para,Chomchom,Iranibhok');

foreach($multidymentions as $singarr){
    $singg = preg_split("/,|;/",$singarr);
    print_r($singg);
}