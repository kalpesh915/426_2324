<?php

    $ip1 = 10; // global

    echo "<hr> value of \$ip1 is $ip1";

    function msg(){
        echo "<hr> value of \$ip1 is $ip1"; // local
    }

    msg();
?>