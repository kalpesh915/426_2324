<?php
/*  
    PHP Integers
    2, 256, -256, 10358, -179567 are all integers.
    An integer is a number without any decimal part.
    An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.
*/

    $ip1 = 4;
    $ip2 = 2.5;
    $ip3 = $ip1 * $ip2;

    // Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).
    var_dump($ip3);
?>
