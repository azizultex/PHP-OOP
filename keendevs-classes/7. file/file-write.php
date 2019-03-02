<?php
$str = "Hello World";
	echo substr($str,-3,-2);
	echo  PHP_EOL;
	echo strrev($str);
$length = strlen($str)-1;
for ($i=1; $i<$length; $i++) { 
	echo $str[$i];
}
?>


