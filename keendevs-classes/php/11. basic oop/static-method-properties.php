<?php 

class Tour{
    static $name = "Bandorban";
    static function getTour(){
        echo self::$name;
    }
    function changeTour($t){
        self::$name = $t; // properties must use self everywhere inside class 
        $this->getTour(); // methods can use either self or $this inside non-static method
    }

}

$t = new Tour();
// echo $t->name;
// $t->changeTour("SaintMartin");
// $t->getTour();


// echo Tour::$name;
// Tour::getTour();

Tour::changeTour("Nafakum");
