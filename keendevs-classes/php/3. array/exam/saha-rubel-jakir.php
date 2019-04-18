<?php

// Q: output the string in below format using array_reduce from the given array $shops;
// format: Shampoo,Cholocolate,.... - Shampoo,Cholocolate,....

$shops = array(
    array(
        "name" => "Oruma",
        "products" => ["Shampoo", "Chocolate", "Oil", "Biscuits"]
    ),
    array(
        "name" => "Birani House",
        "products" => ["Beaf biriani", "Mutton biriani", "Chicken biriani", "Fish curry"]
    ),
    array(
        'name' => 'big bazar',
        'products' => ['Rice','Sugar','oil','libistik'],
    )
);


// // Ans: 

function product($old,$new){
    $products = join(",", $new['products']);
    return $old .''. $products;

}

$result = array_reduce($shops,'product');
$re = explode(',',$result);
print_r($re);