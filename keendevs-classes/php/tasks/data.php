<?php
include_once "config.php";
echo DB_NAME;
$connection = mysqli_connect(DB_USER,DB_PASSWORD,DB_NAME,DB_HOST);
if(!$connection){
    // throw new Exception("Cannot connect to database");
    echo "sahab";
}else{
    echo "Connected";
}