<?php 

/*
Late static binding self, parent, and static keywords 

static will wait, 
self no wait. 

Resource: 
http://php.net/manual/en/language.oop5.late-static-bindings.php,
http://stackoverflow.com/questions/11072334/forwarding-and-non-forwarding-calls-in-late-static-binding-php-5-3,

http://stackoverflow.com/questions/23238032/what-is-call-forwarding-and-static-calls-in-php-or-otherwise-late-static-binding

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

	public function foo() {
		echo __CLASS__ . "\n";
	}
}

class B2 extends A2 {

}

class C2 extends B2 {

}

// $b = new B2();
// $b->test();

$c = new B2();
$c->foo();



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