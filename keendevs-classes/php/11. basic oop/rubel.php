<?php

class Math{
    public $allnumber;
    public function __construct($array){
        $this->allnumber = $array;
    }
    public function even(){
        foreach($this->allnumber as $number){
            $evenresult = $number % 2;
        }
    }
}
$result = 






// $result = new Math(array(2,3,44,55,6));
// $result->even();

// $array = array(2,4,5,7,8);

// foreach($array as $a){
//     if($a % 2 == 0){
//         echo $a;
//         echo PHP_EOL;
//     }
    
// }
// function even($e){
//     return $e%2 == 0;
// }
// $getnumber = array_filter($array, "even");
// print_r($getnumber);


