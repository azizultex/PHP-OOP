<?php

function our_custom_error_message($no, $message, $file, $line ) {
    if( $no === 1 ) {
        echo "This is user generated warning!";
        // mail("azizultex@gmail.com", ....)
        exit;
    }
    echo "Error [{$no}]: {$message} on {$file} line number {$line} \n";
}

set_error_handler("our_custom_error_message");

echo $sabbir;

trigger_error("Hey! It's our error triggered manually.");

// echo E_ERROR;