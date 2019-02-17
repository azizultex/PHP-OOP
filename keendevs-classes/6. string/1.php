<?php 

// $name = "Rakib";
$string01 = "My name is Rakib";
// printf("My name is %s", $name);

// echo substr($string01,-5);

$length = strlen($string01);
// echo $length; 16

// for($i=0; $i<$length; $i++){
//     echo $string01[$i];
//     echo PHP_EOL;
// }

//echo $string01[16];

$str = "Hello World, Buddy";
$strArr = explode(" ", $str);
// $revArr = array_map("strrev", $strArr);
// echo join(" ", $revArr);
$a = [];
foreach($strArr as $st){
    // array_push($a, strrev($st));
    $a[] = strrev($st);
}

// echo join(" ", $a);


echo strtok($str, ", ");