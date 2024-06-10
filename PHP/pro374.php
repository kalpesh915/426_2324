<?php

    $ip1 = 10;
    $ip2 = 50; 

    function msg(){
        echo $GLOBALS["ip1"] + $GLOBALS["ip2"];
    }

    msg();
?>