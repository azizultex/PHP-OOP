<?php

session_name("phpclass");
session_start([
    'cookie_lifetime' => 60
]);
// $_SESSION['class'] = "PHP";

echo $_SESSION['class'];