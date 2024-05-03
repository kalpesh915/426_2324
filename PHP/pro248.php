<?php
    /*
        If the variadic argument is not the last argument, you will get an error.

        Error aavse
    */

    function sum(...$ip1, $ip2){
        $ans = $ip1;
        foreach($ip2 as $tmp){
            $ans += $tmp;
        }
        echo "<hr> Sum is $ans";
    }

    sum(11, 22);
    sum(11, 22, 33);
    sum(11, 22, 33, 44);
    sum(11, 22, 33, 44, 55);
    sum(11, 22, 33, 44, 55, 66);
    sum(11, 22, 33, 44, 55, 66, 77);
    sum(11, 22, 33, 44, 55, 66, 77, 88);
    sum(11, 22, 33, 44, 55, 66, 77, 88, 99);
    sum(11, 22, 33, 44, 55, 66, 77, 88, 99, 111);
?>