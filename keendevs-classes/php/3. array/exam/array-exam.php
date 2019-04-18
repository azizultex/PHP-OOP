<?php
class Math{
    public $a;
    function __construct($n=0){
        $this->a = $n;
        $this->evenOdd();
    }
    function evenOdd(){
        if($this->a%2 == 0){
            echo"{$this->a} is an even";
        }else{
            echo"{$this->a} is an odd";
        }
    }
}
$b = new Math(2);



