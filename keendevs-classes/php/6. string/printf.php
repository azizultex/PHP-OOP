<?php 
// https://www.elated.com/formatting-php-strings-printf-sprintf/

// printf(string format, variables)
// format of directives %[flag][width][.precision][specifier]

printf("My name is %2\$s at %1\$s", "Keendevs", "Pabna");

// printf

// FF = 15x16^1+15x16^0 
//    = 240+15
//    = 255

// sign specifier
echo PHP_EOL;
printf("%+d", -36);

// padding - <padding-char><width>
echo PHP_EOL;
printf("%'*3d", 2555);
