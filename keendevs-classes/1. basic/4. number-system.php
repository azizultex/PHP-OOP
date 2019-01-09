<?php

// Binary - 2
// 0 1

// Octal - 8
// 0 1 2 3 4 5 6 7 

// Decimal - 10
// 0 1 2 3 4 5 6 7 8 9 

/* to binary
105 / 2  = 52, 1 // LSB
52 / 2   = 26, 0
26 / 2   = 13, 0
13 / 2   = 6, 1
6 / 2    = 3, 0
3 / 2    = 1, 1
            , 1 // MSB

1101001
*/

echo decbin(105);
echo "\n";

/* to octal
93456 / 8 = 11682, 0
11682 / 8 = 1460, 2
1460 / 8  = 182, 4
182 / 8   = 22, 6
22 / 8    = 2, 6
          = 2

          266422
*/

echo decoct(93456);
echo "\n";

// Hexadecimal - 16
// 0 1 2 3 4 5 6 7 8 9 A B C D E F

/* to hexadecimal
938465 / 16 = 58654, 1
58654 / 16  = 3665, 14
3665 / 16   = 229, 1
229 / 16    = 14, 5
            = 14

            E51E1

*/

echo dechex(938465);


ASCII = American Standard Code For Information Interchange 







