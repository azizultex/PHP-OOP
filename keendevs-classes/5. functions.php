<?php 

$a = 6;
$b = 5;

 // parameter, arguments
function addition($a=9, $b){
    return $a + $b . "\n";
}

// addition(9, 9);
// addition(5, 8);
// addition(7, 6);

$result = addition(6, 9);

echo "Sir, My result is : {$result}";



// array operator
$arrayOne = array("a" => "Apple", "b" => "Ball", "c" => "Cat");
$arrayTwo = array("e" => "Egg", "f" => "Football");

var_dump($arrayOne != $arrayTwo);


$task = 'write';
echo $task;
echo "\n";
$task = 'read';
echo $task;
echo "\n";


// built-in function 
$numbers = [4, 5, 6, 456, 38, 46];
echo "Min: " . min($numbers);
echo "Max: " . max($numbers);
echo "Total: " . array_sum($numbers);

// developer defined function 


// constant
echo "\n";
define("PERCENTAGE", 50);
define('PERCENTAGE', 60);
echo constant("PERCENTAGE");
echo "\n";
$con = "constant";
echo "Your percentage is: {$con('PERCENTAGE')}";
echo "\n";
echo "Your percentage is: " . constant('PERCENTAGE');
echo "\n";
echo "Your percentage is: " . PERCENTAGE;
echo "\n";

function myFunc($arg) {
    $arg = $name;
    if('jakir' == $name ){
       echo "Right";
    }
    return $arg;
}

echo myFunc('jakir');
