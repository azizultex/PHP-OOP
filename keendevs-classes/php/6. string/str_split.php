<?php 

$sabbir = "Sabbir cooks nice oo oo dishes";
$splitted = str_split($sabbir);

// var_dump($splitted);

var_dump(array_count_values($splitted));