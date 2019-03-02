<?php 

$str = "The quick brown brown Brown fox jumps over the lazy dog.";

$replaced = str_replace("b", "c", $str,$a);
$array_Replace = str_replace(array("c", "k"), array("d", "l"), $str);

echo $array_Replace;
echo PHP_EOL;
// echo $a;



