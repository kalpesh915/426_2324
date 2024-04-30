<?php
    /*
        ?: 	Ternary 	
        $x = expr1 ? expr2 : expr3 	Returns the value of $x.
        The value of $x is expr2 if expr1 = TRUE.
        The value of $x is expr3 if expr1 = FALSE

        find maximum out of two numbers with ternary operator
    */ 

    $ip1 = 152;
    $ip2 = 25;
        /// condition ? true part : false part
    $ans = ($ip1 > $ip2 ? $ip1 : $ip2);

    echo "Maximum is $ans"; 
?>
