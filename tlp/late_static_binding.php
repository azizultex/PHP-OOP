<?php 

/*
Late static binding self, parent, and static keywords 

static will wait, 
self no wait. 

*/

class A {
	public static function foo() {
		static::who();
	}

	public static function who() {
		echo __CLASS__ . "\n";
	}
}

class B extends A {

	public static function test() {
		A::foo(); // A
		parent::foo(); // A
		self::foo(); // A
	}

	public static function who() {
		echo __CLASS__ . "\n";
	}


}

class C extends B {
	public static function who() {
		echo __CLASS__ . ' got from c ' . "\n";
	}
}


C::test();



echo "<h3> Let's Test</h3>";

class D {
	public static function foo() {
		self::who();
		static::who();
	}

	public static function who() {
		echo __CLASS__ . "\n";
	}


}


class E extends D {

	public static function test() {
		static::foo();
	}

	public static function foo() {
		echo __CLASS__ . "\n";
	}

	public static function who() {
		echo __CLASS__ . "\n";
	}
}


E::test();



echo "<h3> New Test</h3>";

class A2 {

	private function foo() {
		echo "Success\n";
	}

	public function test() {
		$this->foo();
		static::foo();
	}

}

class B2 extends A2 {

}

class C2 extends B2 {
	public function foo() {
		echo 'Something';
	}
}

$b = new B2();
$b->test();

$c = new C2();
$c->test();



echo "<h3> Late static bind New Test</h3>";


  class Car
    {
        public static function run()
        {
            return static::getName();
        }

        private static function getName()
        {
            return 'Car';
        }
    }

    class Toyota extends Car
    {
        protected static function getName()
        {
            return 'Toyota';
        }
    }

    echo Car::run(); // Output: Car
    echo Toyota::run(); // Output: Toyota