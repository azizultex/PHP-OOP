<?php 

Class Store{

    public $list = [
        "cosmetics" =>[
            "fair&lovely",
            "snow",
            "powder"
         ]
    ];

    public function __construct($arr){
        $this->list =  array_merge($this->list, $arr);
    }

    public function getProducts(){
        print_r($this->list);
    }
}


$a2 = [
    "foods" =>[
        "cake",
        "biscuit",
        "chanachur"
    ],
    "kids" => [
        "Diaper",
        "Lactozen",
        "Feeder"
    ]
];


$ress = new Store($a2);
// $ress->getProducts();
print_r($ress->list);
