<?php 
// array_walk, array_map, array_filter, array_reduce

// Q: create a string with the nams of the shops from below array

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

// Ans: 
function name($old,$arr){
    return $old. " " .$arr['name']."\n";
    
}
$b = array_reduce($shops,'name');
print_r($b);
