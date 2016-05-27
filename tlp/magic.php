<?php 

class Student {

	public $name;

	public function __get($name) {
		$this->name = $name;
		echo "No {$this->name} property found <br>";
	}

	public function Showit() {
		echo $this->name . "<br>";
	}

	public function __set($name, $value) {
		$this->name = $name;
		echo "You set the {$name}->{$value} <br>";
	}

	public function __call($name, $arrayFunc) {
		echo "No function with this name <br>";
	}

}

$obj = new Student();

$obj->Alim;

$obj->Showit();


$obj->Azizul = 'Web Development';

$obj->Showit();

$obj->AnyfunctionName();



/*
Source: http://culttt.com/2014/04/16/php-magic-methods/
*/

class Entity {

	protected $meta;

	public function __construct($m) {
		$this->meta = $m;
	}
}

class Tweet extends Entity {

	protected $id;
	protected $text;

	public function __construct($id, $text, array $meta) {
		$this->id 	= $id;
		$this->text = $text;

		parent::__construct($meta);
	}

	public function __get($p) {
		// if(property_exists($this,$p)) {
			return $this->$p;
		// }
	}

	public function __set($p, $v) {
		$this->$p = $v;
	}

	public function showEverything() {
		echo "id: {$this->id}, text: {$this->text}, and meta: {$this->meta} <br>";
	}

	public function __toString() {
		return 'Object as string';
	}

}

$meta = array( 
	'name' => 'names', 
	'pass' => '24tjys');

$tweet = new Tweet(23, 'Tweet API', $meta);
$tweet->showEverything();
echo '<br>';
echo 'id: ' . $tweet->id;
echo '<br>';
$tweet->id = 'updated id';
echo 'id: ' . $tweet->id;
echo '<br>';
$tweet->showEverything();
echo '<br>';
echo $tweet->id;


echo $tweet;


echo '<br>
===================================================================== <br>
	<h3> __sleep() and __wakeup() methods </h3>
';

class Customers {
	
	private $name;
	private $creditCardNumber;

	public function setName($n) {
		$this->name = $n;
	}

	public function getName() {
		return $this->name;
	}

	public function setCreditCardNumber($cc) {
		 $this->creditCardNumber = $cc;
	}

	public function getCreditCardNumber() {
		return $this->creditCardNumber;
	}

	public function __sleep() {
		return array('name');
	}

	public function __wakeup() {
		if( $this->name = 'azizul' ) {
			$this->creditCardNumber = '0123456789';
		}
	}

}

$cus = new Customers();
$cus->setName('Azizul');
$cus->setCreditCardNumber('562345658989778564');

echo 'Name: ' . $cus->getName();
echo '<br/>';

echo 'CC: ' . $cus->getCreditCardNumber();
echo '<br/>';

$sleep = serialize($cus);
var_dump($sleep);
echo '<br/>';

$wakeup = unserialize($sleep);
var_dump($wakeup);
echo '<br/>';

echo 'Name: ' . $wakeup->getName();
echo '<br/>';

echo 'CC: ' . $wakeup->getCreditCardNumber();
echo '<br/>';




echo '<br>
===================================================================== <br>
	<h3> call_user_func_array() </h3>
';


class Cufa {
	
	public function __construct($p1, $p2, $p3) {
		return call_user_func_array( array($this, 'Cufaparam'), array($p1, $p2, $p3));
	}

	public function Cufaparam($one, $two, $three) {
		$args = func_get_args();
		echo __METHOD__ . " has " . implode(', ', $args) . " parameters.";
	}
}

$getParam = new Cufa('one', 'two', 'three');












