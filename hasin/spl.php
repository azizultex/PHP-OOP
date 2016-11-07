<?php

// var_export(spl_classes());

// $index = 1; 
// foreach (spl_classes() as $key => $value) {
// 	echo $index . '. ' . $value . '<br/>';
// 	$index++;
// }

$arrayObj = new ArrayObject();

// get a list of properties of a class using get_class_vars(), 
// get a list of properties of an object using get_object_vars(),
// get a list of methods of a class using get_class_methods()

// var_export(get_object_vars($arrayObj));


var_export(get_class_vars('ArrayObject'));
echo '<pre>';
var_export(get_class_methods('ArrayObject'));
echo '</pre>';