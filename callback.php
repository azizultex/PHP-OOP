<?php 

/*
1. http://obiplabon.im/15/php-callback-function-introduction/
2. http://www.binarytides.com/php-implementing-callbacks-with-anonymous-lambda-functions/
*/

$arr = [2,5,7];

// echo array_sum($arr);

function sum($carry, $item) {
	return $carry += $item;
}

$result = array_reduce($arr, 'sum');

var_dump($result);
