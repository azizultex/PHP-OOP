<?php

Class Merge{
    private $a1 = [
        "cosmetics" =>[
            "fair&lovely",
            "snow",
            "powder"
         ]
        ];
        public function __construct($recive_array){
           $fff =  array_merge($this->a1,$recive_array);
           print_r($fff);
        }     
}
$a2 = [
    "foods" =>[
        "cake",
        "biscuit",
        "chanachur"
    ]
    ];
$sabbir = new Merge($a2);

// $math = new Math(numbeers in array);
// $math->add(2);
// $math->multiply(23);
// $math->even();
// $math->odd();