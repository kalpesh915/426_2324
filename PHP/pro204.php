<?php
    /*
        PHP Shorthand if Statements
        Short Hand If : To write shorter code, you can write if statements on one line.

        Null Coliasing operator
    */

    $ip1 = 10;

    if($ip1 >= 50) $ans = "True";

    echo $ans ?? "Not Available";
?>