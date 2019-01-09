<?php 

// global superglobal $GLOBALS;

// var_dump($_GET);

// printf("Hello %s, your age is %d", $_GET['name'], $_GET['age']);
// printf("Hello %s, your age is %d", $_POST['name'], $_POST['age']);

// $one_thousand = 1000;
// $x = 5;
// $y = 6;

// // print($ x);
// // echo PHP_EOL;
// // print($y);

// function xy(){
//     // $x = 7;
//     // $y = 8;

//     // global $x, $y;

//     print($GLOBALS['x']);
//     echo PHP_EOL;
//     print($GLOBALS['y']);
// }

// xy();

// echo PHP_EOL;
// print($x);
// echo PHP_EOL;
// print($y);


// date_default_timezone_set("asia/dhaka");
// echo date(DATE_RSS, $GLOBALS['_SERVER']['REQUEST_TIME']);
// echo date(DATE_RSS, $_SERVER['REQUEST_TIME']);
// var_dump($GLOBALS);


$x = 6;

function getYval(){
    static $y = 5;
    return $y++;
}

echo getYval();
echo PHP_EOL;
echo getYval();
echo PHP_EOL;
echo getYval();
echo PHP_EOL;
echo getYval();

