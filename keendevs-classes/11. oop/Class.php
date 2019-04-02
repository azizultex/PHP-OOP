<?php
class Human{
      public $name;
      public $age;
      public $hi;
      function __construct($myname,$myage){
          $this->name = $myname;
          $this->age = $myage;
          echo "My name is {$this->name}, I am {$this->age} years old \n";
          echo "My name is {$this->name}, I am {$this->age} years old \n";

        //   echo $this->name;
      }

      function sayHi(){
           echo "{$this->name} How are you";
        //    $this->sayName();
      }
    //   function sayName(){
    //       echo "My name is {$this->name}, I am {$this->age} years old \n";
    //   }
}
$h1 = new Human("Joynul",21);
$h2 = new Human("kaku",22);
$h1->name = "Rubel";
echo $h1->name ." = ". $h1->age;
echo PHP_EOL;
$h1->sayHi();


// $h1->sayName();
// $h2->sayName();
// $h2->sayHi();

//  class Human{
//      public $sabbir;
//      public function __construct($s){
//          $this->sabbir = $s ;
//      }
//      function getname(){
//          echo $this->sabbir;
//      }
//  }
//  $a1 = new Human("Rubel");
// $a1->getname();

// class Myname{
//     public $name;
//      function name($n){
//         $this->name = $n;
//         echo $n;
//      }
//      function getname($l){
//         echo $l;
//      }
// }
// $a1 = new Myname(1234);
// $a1->name("sabbir");
// $a1->name = "rubel";
// echo $a1->name;
// $a1->getname("bbir");


// Class Num{
//     public $number;
//     public function __construct($n){
//         $this->number = $n;
//     }
//     public function getNumber(){
//         $nn = $this->number;
//         for($i=$nn;$i<=100; $i++){
//             echo $i ."\n";
//         }
//     }
// }
// $k = new Num(10);
// $k->getNumber();
