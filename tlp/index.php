<?php 

class Person {
	public $name;
	public $age;
	const earning = 1345566;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age 	= $age;
	}

	public function earning() {
		echo self::earning;
	}

	public function __destruct() {
		unset($this->name);
		unset($this->age);
	}
}

$p = new Person('Someone', '23');
echo $p->name;
echo $p->earning();

echo '<br>';


$x = 5; $y = "5";

echo gettype($x);
echo '<br>';
echo gettype($y);


echo '<br>';

$num1 = 5;
$num2 = 8;

if($num1 < $num2) {
	echo '$num1 one is less than $num2';
}
