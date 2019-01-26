<?php 

$shops = array(
    array(
        "name" => "Oruma",
        "products" => ["Shampoo", "Chocolate", "Oil", "Biscuits"]
    ),
    array(
        "name" => "Birani House",
        "products" => ["Beaf biriani", "Mutton biriani", "Chicken biriani", "Fish curry"]
    )
);

$shops[]=array(
    'name' => 'big bazar',
    'products' => ['Rice','Sugar','oil','libistik'],
);

// var_dump($shops);

?>
<table>
  
    <?php 
        foreach($shops as $shop){
           echo '<tr><th>' . $shop['name'] . '</th></tr>';
           echo '<tr><td>';
            foreach($shop['products'] as $p){
                echo $p;
            }
            echo '</td></tr>';
        };
    ?>
  
</table>
<?php

// // print_r($shops);
// $name = array('Azizul','sabbir','jakir');

// // array_push($name,'rubel');
// $name[]='sahabuddin';
// var_dump($name);
$fruits = ["Apple","Banana","Guava"];

foreach($fruits as $f){
    echo $f;
    echo PHP_EOL;
}


$jobs = array(
    "frontend" => [
        "name" => "Jakir"
    ],
    "wordpress" => [
        "name" => "Rubel"
    ]
);

$jobs["intern"] = [
    "name" => "Sabbir Hasan"
];

list($jakir, $rubel, $sabbir, $shah) = $shops;
var_dump($shah);





