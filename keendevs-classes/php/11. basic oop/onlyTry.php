<?php

$origarray1 = array(2.4, 2.6, 3.5);
$origarray2 = array(2.4, 2.6, 3.5);

print_r(array_map('floor', $origarray1)); // $origarray1 stays the same
print_r( $origarray1);

// changes $origarray2
array_walk($origarray2, function (&$v, $k) { $v = floor($v); }); 
print_r($origarray2);

// this is a more proper use of array_walk
array_walk($origarray1, function ($v, $k) { echo "$k => $v", "\n"; });

// array_map accepts several arrays
print_r(
    array_map(function ($a, $b) { return $a * $b; }, $origarray1, $origarray2)
);

// select only elements that are > 2.5
print_r(
    array_filter($origarray1, function ($a) { return $a > 2.5; })
);

?>
// $a = [1,2,3,4,5];
// $b = [6,7,8,9];
// function myFunction($k){
//     echo "Here is the key$k \n";
// }
// array_map("myFunction",$a); -->