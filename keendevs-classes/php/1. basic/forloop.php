<?php
// resources 
// 1. https://www.tutorialspoint.com/php/php_loop_types.htm

// for(initialize, condition, increase/decrease ){

    // block of our codes be run a specific number of times
// }

$result = 0;
for($x=10; $x>1; $x--){
    printf("%d + %d", $result, $x);
    echo PHP_EOL;
    $result += $x;
}
echo $result;

// for($x=0; $x<10; $x++){
//     for($y=0; $y<$x; $y++){
//         echo "*";
//     }
//     echo PHP_EOL;
// }

// for($x=0,$y=10; $x<10; $x++,$y--){
//     echo $x . ":" . $y;
//     echo PHP_EOL;
// }


// factorial 6 = 6*5*4*3*2*1
// $number = 6;
// $factorial=1;
// for($x=$number; $x>1; $x--){
//     echo $x;
//     echo PHP_EOL;
//     $factorial = $factorial * $x;
// }
// printf("factorial value of %d is %s", $number, $factorial);


?>


<?php for($x=1; $x < 10; $x++){ ?>
    <h1><?php echo $x; ?></h1>
<?php } ?>

<?php for( $a=1; $a<10; $a++): ?>
    <h1><?php echo $a; ?></h1>
<?php endfor; ?>


<?php 

for($b=1; $b<10; $b++):
    // echo "<h1>". $b ."</h1>";
    // echo '<h1>'. $b .'</h1>';
    // echo "<h1>{$b}</h1>";
    // echo "<h1>$b</h1>";
    printf("<h1>%s</h1>", $b, 5);
    $result = sprintf("<h1>%s</h1>", $b);
    echo PHP_EOL;
endfor;
