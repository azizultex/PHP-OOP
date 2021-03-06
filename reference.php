<?php 


/*
1. https://derickrethans.nl/debugging-variables.html
2. http://www.phpinternalsbook.com/zvals.html
3. https://entwickler.de/webandphp/how-php-manages-variables-125644.html
4. http://blog.ircmaxell.com/2012/03/phps-source-code-for-php-developers.html

Videos: 

1. https://www.youtube.com/watch?v=FumOXhXRDZg

When to use pass by reference: 
1. http://stackoverflow.com/questions/5479073/when-is-it-good-to-use-pass-by-reference-in-php
2. http://www.elated.com/articles/php-references/

*/

// php internally implements variable values through a structure known as _zval_struct ( Zend Value Structure )
// The internal representation of a PHP variable container ( called zval ), contains the type and value of a variable, but also whether it is a reference and what its refcount is.



$var1 = 'Hello World';
$var2 = 'something';

$var2 = $var1;
$var3 = $var1;
$var4 =& $var2;

$a = array('foo'=>'bar', 42);

class Foo {
	public $a = 42;
	protected $bar = 'default';
}
$obj = new Foo;

function zval_val(&$var) {
	return debug_zval_dump($var);
}

//zval_val($var1);



$a = array("foo"=>"bar", 1 => 42);
$b = $a["foo"];
$c = &$b;
$b = 18;
unset($a['foo']);
$a[1] = $b;

debug_zval_dump($c);










