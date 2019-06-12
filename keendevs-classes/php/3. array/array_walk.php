<?php 

// function($v, $k, $extra_variable)
// array_walk($arr, function, $extra_variable)


function developer($list, $company){
    array_walk($list, function($v, $k, $company){
        printf("Programmer %s from %s \n", $v, $company);
    }, $company);
}

developer(["Sabbir", "Joynul", "Jakir"], "keendevs");