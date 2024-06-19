<?php
    $ip1 = "192.168.10.211"; // 192.168.11.511

    if(filter_var($ip1, FILTER_VALIDATE_IP) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>