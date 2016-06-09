<?php 

class Car {
	public $tank;

	public function fill($float) {
		$this->tank += $float;
		return $this;
	}

	public function ride($float) {
		$miles = $float;
		$gallons = $miles/50;
		$this->tank -= $gallons;
		return $this;
	}
}

