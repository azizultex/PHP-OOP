<?php

$a = ["a", "b", "c", "d"];
$b = ["d", "e", "f"];

$ab = array_merge($a, $b);

var_dump(array_unique($ab));