<?php
    /*
        find maximum value out of three number with ladder if 
    */

    $ip1 = 100;
    $ip2 = 200;
    $ip3 = 300;

    if($ip1 > $ip2 and $ip1 > $ip3){
        $ans = $ip1;
    }else if($ip2 > $ip1 and $ip2 > $ip3){
        $ans = $ip2;
    }else{
        $ans = $ip3;
    }

    echo "<hr> Maximum is $ans";
?>