<?php

// $HexC = new Hexcolor("#ffffff");
// $HexC->getRGB();


// class Hexcolor{
//     public $color;
//     public $red;
//     public $green;
//     public $blue;

//     public function __construct($colorCode){
//         $this->color = ltrim($colorCode,"#");
//         $this->parsecolor();
//     }
//     public function getColor(){
//         return $this->color;
//     }
//     public function setColor($colorCode){
//         $this->color = ltrim($colorCode,"#");
//     }
//     private function parsecolor(){
//        list() =  sscanf($this->color,"%02x%02x%02x");
//        print_r($colors);

//     }
// }


// $HexC = new Hexcolor("#ffffff");


// class RGBConversion{
//     private $hex;
//     function __construct($c){
//         $this->hex = $c;
//     }
//     function getRGB(){
//         print_r(sscanf($this->hex, "%2x%2x%2x"));
//     }
// }

// $rgb = new RGBConversion("FFDDEE");
// $rgb->getRGB();


    class Human{
        public $name;
        public $num;
         function sayHi(){
             echo "Sabbir\n";
         }
         function sayName(){
            echo $this->name;
            echo PHP_EOL;
        }
        function sayNum($Num){
            $this->num =$Num;
            echo $Num;
            echo PHP_EOL;
        }
    }

$a1 = new Human();
$a1->name = "Rubel\n";  //set operation//
$a1-> sayHi();
$a1->sayNum(1234);
echo $a1->name;
 
