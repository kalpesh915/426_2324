<?php

    $ip1 = 10;
    $ip2 = 50; 

    function msg(){
        global $ip1, $ip2;
        echo $ip1 + $ip2;
    }

    msg();
?>