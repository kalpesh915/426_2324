<?php
    /*
        $ans is local variable for makeSum function 
    */

    $ans = 10;

    function makeSum($ip1, $ip2, $ip3){
        $ans = $ip1 + $ip2 + $ip3;
    }

    makeSum(111, 222, 222);

    echo "Answer is $ans";
?>