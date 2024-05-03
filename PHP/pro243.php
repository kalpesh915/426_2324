<?php
    /*
        problem without Variable Number of Arguments
    */

    function sum2($ip1, $ip2){
        echo "<hr> Sum is ".$ip1 + $ip2;
    }

    function sum3($ip1, $ip2, $ip3){
        echo "<hr> Sum is ".$ip1 + $ip2 + $ip3;
    }

    function sum4($ip1, $ip2, $ip3, $ip4){
        echo "<hr> Sum is ".$ip1 + $ip2 + $ip3 + $ip4;
    }

    function sum5($ip1, $ip2, $ip3, $ip4, $ip5){
        echo "<hr> Sum is ".$ip1 + $ip2 + $ip3 + $ip4 + $ip5;
    }

    sum2(11, 22);
    sum3(11, 22, 33);
    sum4(11, 22, 33, 44);
    sum5(11, 22, 33, 44, 55);
?>