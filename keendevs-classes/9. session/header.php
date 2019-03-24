<?php

// session_name("web developers");
session_start();

// $_SESSION["suman"] = "Natore";
// $_SESSION["sabbir"] = "Pabna";



$loggedIn = false;
if($loggedIn){
    header("location:https://google.com");
}
echo $_SESSION["suman"];
echo PHP_EOL;
echo $_SESSION["sabbir"];

// session_destroy();
// echo 