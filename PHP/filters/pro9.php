<?php
    $ip1 = "smit@vanzarafamily.co.in"; 

    if(filter_var($ip1, FILTER_VALIDATE_EMAIL) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>