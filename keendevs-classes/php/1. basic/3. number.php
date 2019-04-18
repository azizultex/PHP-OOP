<?php 
// echo PHP_INT_MIN;
// echo "\n";
// echo PHP_INT_MAX;
// echo "\n";
// $num = 844;
// var_dump($num);

// $x = 6;
// $y = 5;
// $x -= $y;
// echo $x;

// echo 2 == 2;

if(123 != '123'){
    echo 'True';
}
 
//... -3, -2, -1, 0, 1, 2,3...

// if(10 < 20){
//     echo "Sotti";
// }

$ssArry = [
    'sabbir' => 25,
    'rubel' => 26,
    'saddam' => 27
];

// foreach( $ssArry as $k => $v ){

//     echo "{$k} age is {$v} \n";

// }

$num = [5, 6, 7, 8, 9, 10];

$output = null;
// $num as $n = one by one $n value
foreach($num as $n){
    $output .= "The number is : {$n} \n";
    // break;
};

echo $output ;

$name = ['saddam', 'rubel','joynulkakku','limon','jakir'];

$output = null;
foreach($name as $lull){
    $output .= "{$lull} is a bad boy\n";
    // break;
};

echo $output;

 $limon = "two girlfriends";
if( $limon == 'no girlfriends'){
    echo 'HE HAVE NO GIRLFRIENDS AND HE IS A GOOD BOY';
 } else{
    echo 'YES HE HAVE MORE GIRLFRIENDS AND HE IS ALSO 
A BAD BOY and HE IS CHAIN SMOKER.';
};
echo "\n";
function joynul($fname,$lname){
    echo "my first name is {$fname} and my last name is {$lname}";
}
joynul('zoynul','kakku');
echo "\n";
$saddam = "asked me for a girlfriend";
if( $saddam == 'not asked me for a girlfriend'){
    echo 'saddam is not asked me for a girlfriend HE IS A GOOD BOY';
 } else{
    echo 'saddam asked me for a girlfriend but he already have a girlfriend then he is a great lewd. lewd meaning lucca';
};





