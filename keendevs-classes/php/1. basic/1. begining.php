<?php


// string, Integer, float, boolean, Null, Array, Object, Resources

// true, false,

// $sabbir = "Bad boy";
// if( $sabbir == 'Good boy'){
//     echo 'Yes';
// } else {
//     echo 'No';
// }

// Arithmetic Operator
// Assignment Operator
// Comparison Operator

$a = 5;
$b = 6;

// boolean 
// true = 1, false = 0;

// if( 1 ){
//     echo "Yes";
// } else {
//     echo "No";
// }

function salary($salary, $totalsalary){
    $amount = ( $salary * $totalsalary ) / 100;
    return $salary + $amount;
}

$employee = [
    'limon' => 20000,
    'rubel' => 15000,
    'saddam' => 10000,
];


foreach($employee as $name=>$salary){
    // var_dump($name . ': ' . $salary);
    $percent;
    if( $salary >= 20000){ 
        $percent = 50;
    } else if ( $salary >= 15000){
        $percent = 55;
    } else {
        $percent = 60;
    }

    $amount = salary($salary, $percent);

    echo "{$name}total salary is: {$amount}\n"; 
}

function sabbir ($fname,$lname){
    echo "my first name is {$fname} and my last name is {$lname}";
}


sabbir('zoynul','abedin');





