<?php
/*  
    Here are some rules for integers:

    An integer must have at least one digit
    An integer must NOT have a decimal point
    An integer can be either positive or negative
    Integers can be specified in three formats: decimal (base 10), hexadecimal (base 16 - prefixed with 0x), octal (base 8 - prefixed with 0) or binary (base 2 - prefixed with 0b)

*/

    $ip1 = 15; // deciaml
    echo "<hr> value of \$ip1 is $ip1";
    $ip1 = 015; // octal
    echo "<hr> value of \$ip1 is $ip1";
    $ip1 = 0x15; // hex
    echo "<hr> value of \$ip1 is $ip1";
    $ip1 = 0b11010; // binary
    echo "<hr> value of \$ip1 is $ip1";
?>
