<?php
/*  
    PHP NaN : NaN stands for Not a Number.
    NaN is used for impossible mathematical operations. PHP has the following functions to check if a value is not a number:
    is_nan()
    However, the PHP var_dump() function returns the data type and value:
*/

    echo "<hr> ";
    var_dump(is_nan(15));
    echo "<hr> ";
    var_dump(is_nan(acos(15)));
 ?>
