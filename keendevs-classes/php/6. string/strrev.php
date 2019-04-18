<?php

echo strrev("What's up?");

$f = ["Mango", "Banana", "Jackfruits"];
$fUpper = array_map("strrev", $f);
$fRevers = array_map("strtoupper", $fUpper);
print_r($fRevers);

