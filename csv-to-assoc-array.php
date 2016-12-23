<?php

// http://php.net/manual/en/function.str-getcsv.php
// http://php.net/manual/en/function.array-filter.php#93965

$file = dirname(__FILE__) . '/assets/data.csv';
// $file_content = file($file);
// $array = array_map('str_getcsv', $file_content);
// $header = array_shift($array);


// print_r(array_intersect($array, array(29905)));

// array_walk($array, '_combine_array', $header);

// function _combine_array(&$row, $key, $header) {
//   $row = array_combine($header, $row);
// }

$csv = array_map('str_getcsv', file($file));
array_walk($csv, function(&$a) use ($csv) {
  $a = array_combine($csv[0], $a);
});
array_shift($csv); # remove column header

/* 
 * filtering an array 
 */ 
function filter_by_value ($array, $index, $value){ 
    if(is_array($array) && count($array)>0)  
    { 
        foreach(array_keys($array) as $key){ 
            $temp[$key] = $array[$key][$index]; 
             
            if ($temp[$key] == $value){ 
                $newarray[$key] = $array[$key]; 
            } 
        } 
      } 
  return $newarray; 
} 


$nResults = filter_by_value($csv, 'state', 'Indiana'); 

$table = "<table>";
$table .= "<th>Zip</th><th>State</th><th>Region</th>";
foreach ($nResults as $key => $value) {
	$table .= "<tr><td>{$value['zip']}</td><td>{$value['state']}</td><td>{$value['region']}</td></tr>";
}

$table .= "</table>";
echo $table;

echo '<pre>';
var_dump($nResults);
echo '</pre>';