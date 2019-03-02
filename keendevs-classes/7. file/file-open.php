<?php 
$file_data = __DIR__ . "/data.txt";
// $file_data = "C:\\wamp\\www\\PHP-OOP\\keendevs-classes\\7. file\\data.txt";


// if(is_readable($file_data)){

	$ofile = fopen($file_data,'r');

	rewind($ofile);
	while($t = fgets($ofile)){
	    echo $t;
	}

// }

// while($t = fgets($ofile)){
//     echo $t;
// }





