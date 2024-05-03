<?php
    /*
        PHP Functions - Returning values To let a function return a value, use the return statement:
    */

    function makeSum($ip1, $ip2, $ip3){
        $ans = $ip1 + $ip2 + $ip3;
        return $ans;
    }

    $answer = makeSum(11, 22, 33);
    echo "Answer is $answer";
?>