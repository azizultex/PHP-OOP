<?php 

Class Php {
	public function __construct() {
		echo "This is : " . __CLASS__ . "<br/>";
	}

	public function framework() {
		echo "Laravel is a php framework";
		return $this;
	}

	public function cms() {
		echo "WordPress is a CMS";
		return $this;
	}
}