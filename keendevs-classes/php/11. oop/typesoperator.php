<?php
class Math{
    public $number;
    public function __construct($arr){
        $this->number = $arr;
    }
    public function getEven(){
        $result = array_filter($this->number, function($num){
            return $num % 2 == 1;
        });
        var_dump($result);
    }

    public function multiply($mult){
        // foreach($this->number as $num){
        //     echo $num*$mult;
        //     echo PHP_EOL;
        // }

        array_reduce( $this->number, function( $n, $o ){
            return $n*$o;
        });
    }


}
$n = [1,2,3,4,6,7,8];
$m1 = new Math($n);
//$m1->getEven();
var_dump($m1->multiply(3));