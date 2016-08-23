<?php 

class A {
	public $name = "Azizul Haque";
	protected $age = 20;
	private $country = 'Bangladesh';

	public function anyname() {
		echo "anyname function";
	}

	public function getIteration() {
		foreach($this as $k => $v) {
			echo "<pre>";
				echo "$k : $v";
			echo "</pre>";
		}
	}

}


$a = new A;
$a->getIteration();


$myVar = array(
	'one' => 'One', 'two' => 'Two', 'three' => 'Three'
	);

$keys = key($myVar);

echo "keys: $keys";