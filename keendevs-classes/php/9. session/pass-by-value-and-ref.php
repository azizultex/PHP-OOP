<?php 

// scope: local, global, static

// $GLOBALS['']

$x = 9;
function add(){
    // $x = 6;
    global $x;
    $y = 8;
    return $x+$y;
}

// echo add();
echo PHP_EOL;
// echo $x;

$i = 80;
function increment(&$i){
    // static $i = 5;
    // $i = 5;
    // global $i;
    echo $i++;
}

// increment($i);
// echo PHP_EOL;
// increment($i);
// echo PHP_EOL;
// increment($i);
// echo PHP_EOL;
// increment($i);

// echo $i;

// $a = &$i;
// echo PHP_EOL;
// echo $a;
// echo PHP_EOL;
// echo ++$a;
// echo PHP_EOL;
// echo $i;


// var_dump($GLOBALS);
