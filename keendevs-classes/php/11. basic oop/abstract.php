<?php 

abstract class Country{
    abstract function passport($n);
}

class Bangladesh extends Country{
    function passport($m){
        echo "I'm Bangladeshi";
    }
}

$c = new Bangladesh();
$c->passport(87);