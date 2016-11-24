<?php 


// 1. http://webcheatsheet.com/php/regular_expressions.php
// 2. https://www.tutorialspoint.com/php/php_regular_expression.htm
// 3. http://php.net/manual/en/refs.basic.text.php


/*******************

1. POSIX

	1. Brackets for range
		[0-9]
		[a-z]
		[A-Z]
		[a-Z]
	2. Quantifiers 
		p+		( Match any string containing atleast one p )
		p*		( Match any string containing 0 or more p )
		p?		( Another use of p* )
		p{N}	( Match any string containing a sequence of N p's )
		p{2,3}	( Match any string containing a sequence of 2 or 3 p's )
		p{2,}	( Match any string containing a sequence of atleast 2 p's )
		p$		( Match any string with p at the end of it. )
		^p 		( Match any string with p at the begining of it. )

	3. POSIX Functions 
		ereg()
		eregi()
		ereg_replace()
		eregi_replace()
		split()
		spliti()
		sql_regcase()

2. PCRE ( Perl Compatible Regular Expressions )
	
	1. Meta Characters

		A meta character is simply an alphabetical character preceded by a backslash that acts to give the combination a special meaning.

		.		( a single character )
		\s 		( a whitespace character. space, tab, newline )
		\S 		( a non-whitespace character )
		\d 		( a digit character )
		\D 		( a non-digit character )
		\w 		( a word character (a-z, A-Z, 0-9, _) )
		\W 		( a non-word character )
		[aeiou]        ( matches a single character in the given set )
		[^aeiou]       ( matches a single character outside the given set )
		(foo|bar|baz)  ( matches any of the alternatives specified )

	2. Modifiers 

		i 	Makes the match case insensitive
		m 	Specifies that if the string has newline or carriage
			return characters, the ^ and $ operators will now
			match against a newline boundary, instead of a
			string boundary
		o 	Evaluates the expression only once
		s 	Allows use of . to match a newline character
		x 	Allows you to use white space in the expression for clarity
		g 	Globally finds all matches
		cg 	Allows a search to continue even after a global match fails

*******************/ 

// Preg match 

if(preg_match("/ell.*/", "Hello World What the hell is going on?", $m)) {
	echo "result found:";
	var_dump($m);
}


