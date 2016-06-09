<?php 

// function __autoload($c) {
// 	include "classes/" . $c . ".php";
// }

spl_autoload_register(function($c){
	include "classes/" . $c . ".php";
});


$php = new Php();
$java = new Java();
$corola = new Car();

echo '<br>';
$php->framework()->cms();

echo '<br>';

$tank = $corola->fill(10)->ride(40)->tank;

echo "Left amount of gas $tank";