<?php

class Homecost {

    private $height;
    private $width;

    public function __construct($h = 1, $w = 1) {
        $this->height = $h;
        $this->width = $w;
    }

    public function squarefit(){
       $res =  $this->height * $this->width;
       return $res*1600;
    }
}

$r = new Homecost(250, 500);
// echo $r->squarefit();

echo $r->height;







