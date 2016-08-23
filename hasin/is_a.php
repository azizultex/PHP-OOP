<?php 

class Azizul {

}

class Mahin extends Azizul {

}

$azizul = new Azizul();
$mahin = new Mahin();

if(is_a($mahin, "Azizul")) {
	echo "Yes, it is parent class";
}

echo "\n";

if($mahin instanceof Azizul) {
	echo 'Instance of Azizul';
}

echo "\n";

echo get_parent_class($azizul);