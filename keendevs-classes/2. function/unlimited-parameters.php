<?php

$number = ["a", "B", "c", "D", "E"];

// $number = array(2, 3, 4, 5);

$team = [
    'boss' => 'Azizul Haque',
    'employee' => 'Rubel'
];

// $team = array(
//     "boss" => "Azizul Haque",
//     'designer' => "Saddam Hossen"
// );

// echo count($number);
$n = ["a", "B", "c", "D", "E"];
// for($a=0;$a<count($n);$a++){
//     echo $n[$a];
//     echo PHP_EOL;
// }

foreach($n as $single){
    echo $single ."\n";
}

$multi_array = [
    'person'   =>[
        'name' =>'zoynul',
        'phone' =>01735,
        'age'   =>28,
        
    ],
    'keendevs'  =>[
        'Boss'  =>'Azizul',
        'employee'=>[
            'zoynul',
            'rubel',
            'kakku',
            
        ]
    ]
        ];

$select_value = $multi_array['keendevs']['employee'];
echo $select_value[1];


// Splat / spread 