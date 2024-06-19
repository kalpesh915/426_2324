<?php
    /* 0-9 A-F */
    $ip1 = "2001:0db8:85a3:08d3:1319:8a2e:0370:733a"; 

    if(filter_var($ip1, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>