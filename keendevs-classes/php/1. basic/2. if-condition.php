<?php
// $balance = 550;

// 10000 - 14999 = samsung    // $balance >= 10000 && $balance < 15000
// 15000 - 24999 = MI         // $balance >= 15000 && $balance < 25000
// 25000+++ = iPhone          // $balance >= 25000 

// $balance = 16000;

// if($balance >= 10000 && $balance < 15000 ){
//     echo " I want to buy samsung mobile";
// }elseif($balance >= 15000 && $balance < 25000 ){
//     echo " i want to buy Mi mobile ";
// }elseif($balance >= 25000 ){
//     echo " i want to buy Iphone 5";
// }else{
//     echo " i have no money";
// }

$person = 6;                   
// $person >= 1 && $person < 4
// $person >= 4 && $person < 7
// $person >= 7 && $person < 10

if($person < 4 ){
    echo "need 1 bike";
}elseif($person < 7 ){
   echo "need 2 bike";
}elseif($person < 10){
    echo "need 3 bike";
}

echo "\n";


// Ternary operator

$result = ( 123%2 == 1 ) ? "odd" : "even";

echo $result;


$balance = 10;
$icecream = 1;

$result = ($balance >= 10 && $icecream == 0) ? "buy icecream" : "No fund";
echo $result;

// if($balance >= 10){
//     echo "buy icecream";
// }else {
//     echo "no fund";
// }

// if($tour){
//     echo "tour comfirm";
// }else{
//     echo "tour cancel";
// }


// ternary operator
$a = 5;
$result = ($a == 5) ? "Five" : (($a == 4) ? "Four" : (($a == 7) ? "seven" : "unknonw")) ;
echo $result;