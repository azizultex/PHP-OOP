<?php 

class AB {
	public function methodAB() {
		echo __CLASS__;
	}
}

Class AC {
	public function methodAC(AB $ab) {
		$ab->methodAB();
	}
}

$ac = new AC;
$ac->methodAC(new AB);


echo "<h3> Type Hinting with Normal Function</h3>";


class AF {
	public function afecho() {
		echo "Echo AF Class";
	}
}

function affunname( AF $af) {
	$af->afecho();
}


affunname(new AF);

echo "<h3> Type Hinting in interface </h3>";

interface test {
	public function abc();
}

class E implements test {
	public function abc() {
		echo "test interface extending";
	}
}


class F {
	public function abc() {
		echo "not a interface extend";
	}
}

function textInterface(Test $t) {
	$t->abc();
}

textInterface( new E);
textInterface( new F);
