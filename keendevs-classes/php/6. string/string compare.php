<?php 

// strcmp, strcasecmp, strncmp, strcoll, substr_compare
// 0, -1 if both not identical, 
// 1 if first few character matches, 
// > 0, < 0

$str1 = "The quick brown fox";
$str2 = "";

// strcmp
echo strcmp($str1, $str2);

