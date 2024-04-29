<?php
/*  
    PHP Casting Strings and Floats to Integers Sometimes you need to cast a numerical value into another data type.
    The (int), (integer), and intval() functions are often used to convert a value to an integer.    
*/

    echo "<hr> ";
    $x = "100";
    var_dump($x);
    echo "<hr> ";
    $x = (int) $x;
    var_dump($x);
    
 ?>
