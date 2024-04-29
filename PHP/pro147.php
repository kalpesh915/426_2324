<?php
/*  
    PHP Infinity
    A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
    PHP has the following functions to check if a numeric value is finite or infinite:
*/

    echo "<hr> ";
    var_dump(is_finite(10e515));
    echo "<hr> ";
    var_dump(is_infinite(10e515));
 ?>
