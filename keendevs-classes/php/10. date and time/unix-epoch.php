<?php 

// echo time();
echo PHP_EOL;
$mt = microtime(true);
// printf("%10.53f", $mt);

$start = microtime(true);
factorial(1000);
$end = microtime(true);
$exce = $end - $start;

printf("%10.8f", $exce);

function factorial($n){
    $result = 1;
    for($i=1;$i<=$n; $i++){
        $result *= $i;
    }
    return $result;
}
