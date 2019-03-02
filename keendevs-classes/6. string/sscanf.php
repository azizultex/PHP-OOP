<?php 

$str1 = "SN/2350001= 5656456";
// list($first, $second) = sscanf($str1, "SN/%d %d");

$letsee = sscanf($str1, "SN/%d= %d", $first, $second);
// var_dump($letsee);
// echo $second;

$date = "January 01jktyrdsethdg1993";
// $daymonthyear = sscanf($date,"%s %djktyrdsethdg%d",$month,$date,$year);
    // echo $year;

$sscanfresult = sscanf($date,"%s %djktyrdsethdg%s");

list($m,$d,$y) = $sscanfresult;
    echo "$m\n";

$namaz = array(
    'Fazr',
    'Zohor',
    'Asar',
    'Magrib',
    'Esha'
);


list($a, $b) = $namaz;

echo $b;