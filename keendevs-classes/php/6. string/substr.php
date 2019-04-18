<?php

$s = "Hey! what's up?";
$a = explode(" ",$s);
print_r($a);

$r = array_map("strrev",$a);
print_r($r);