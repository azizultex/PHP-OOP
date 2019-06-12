<?php
define('pi',3333);
echo pi;
function Helo(){
    echo "hello world";
}
Helo();
echo PHP_EOL;


// class Homecost {

//     private $height;
//     private $width;

//     public function __construct($h = 1, $w = 1) {
//         $this->height = $h;
//         $this->width = $w;
//     }

//     public function squarefit(){
//        $res =  $this->height * $this->width;
//        return $res*1600;
//     }
// }

// $r = new Homecost(250, 500);
// // echo $r->squarefit();

// echo $r->height;
class Math{
    public $a;
    public function __construct($b){
        $this->a = $b;
        $this->EvenOdd();
    }
    public function EvenOdd(){
        $c = $this->a;
        if($c%2!==0){
            echo "$c is an odd number";
        }else {
            echo "$c is an even number";
        }
    }
}
$m = new Math(21);





