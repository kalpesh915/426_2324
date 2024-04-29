<?php
/*  
    PHP has the following functions to check if the type of a variable is integer:

    is_int()
    is_integer() - alias of is_int()
    is_long() - alias of is_int()

*/

    echo "<hr> ";
    var_dump(is_int(10));
    echo "<hr> ";
    var_dump(is_integer(10));
    echo "<hr> ";
    var_dump(is_long(10));
    echo "<hr> ";
    var_dump(is_long(10.10));
    echo "<hr> ";
    var_dump(is_int(10.15));
?>
