<?php
// list the number of words in the paragraph below.
$str = "Siler & Ingber, LLP isn’t like other law firms. We believe in holding ourselves to the highest standard possible. Everything we do is done with our core values in mind: honesty, integrity, and ethics. When you work with a Long Island personal injury lawyer from our firm, the our representation you receive will have these principles at its foundation.";

// $e = explode(' ',$str);
$e = preg_split("/[\s,:.&]+/",$str);

$c = array_count_values($e);
// $p = [];
// foreach($c as $k => $v) {
//     if($v>=2){
//         array_push($p, $k);
//     }
// }

// print_r(join(" ", $p));

$p = array_filter($c, function($v){
    return $v >= 2;
});

$pkeys = array_keys($p);
// $pkeys = array_flip($p);

// var_dump($p);
// var_dump($pkeys);

print_r(join(" ", $pkeys));

$s = 'del caso, así como el calendario de la corte';
echo strtoupper($s);