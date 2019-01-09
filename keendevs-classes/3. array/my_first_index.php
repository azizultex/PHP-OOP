<?php
// $city = ['Dhaka','Pabna','Natore','kustia'];
$colors = [
    'sky' => 'blue',
    'grass' => 'green',
    'mango' => 'yellow'
];
$k = array_keys($colors);
$v = array_values($colors);
for($a=0;$a<count($k);$a++){
    echo $k[$a].' = '.$v[$a];
    echo PHP_EOL;
};
// foreach($colors as $k=>$v){
//     echo $k ." = ". $v;
//     echo PHP_EOL;
// }
// for($a=0;$a>10;$a--){

// }