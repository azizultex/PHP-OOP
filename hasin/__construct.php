<?php

class Azizul {
	public $firstname;
	public function __construct($fname) {
		$this->firstname = $fname;
		echo "Parent __construct executed!";
	}
}

class Mahin extends Azizul {
	public $lastname;
	public function mahin($lname) {
		$this->lastname = $lname;
		echo "Child __construct executed!";
		parent::__construct("Azizul");
	}
	public function getFirstName() {
		return $this->firstname;
	}
}

$mahin = new Mahin('Haque');
// $azizul = new Azizul('Azizul');
// echo $azizul->firstname;

// echo $mahin->getFirstName();
echo $mahin->firstname;
echo $mahin->lastname;

