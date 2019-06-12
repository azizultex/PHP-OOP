<?php

interface Math{
    public function set();
}
class ChildMath implements Math{
    public function set(){
        echo "This is Child Math";
    }
}

abstract class Calculate{
    abstract function sum($a,$b);
}
class MathSum extends Calculate{
    function sum($a,$b){
        return $a+$b;
    }
}

// $result = new ChildMath();
// $result->set();

$sum = new MathSum();
echo $sum->sum(3,5);
