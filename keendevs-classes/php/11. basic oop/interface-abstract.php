<?php 

interface Math{
    function substraction($a, $b);
}

interface Multiply extends Math{
    function multi($a, $b);
}

abstract class Addition{
    abstract function add($a, $b);
}

class CalculateNumber extends Addition implements Multiply{
    function add($a, $b){
        echo $a + $b;
    }
    // function substraction($a, $b){
    //     echo $a - $b;
    // }
    function multi($a, $b){
        echo $a*$b;
    }
}
$result = new CalculateNumber();
$result->add(8, 5);

