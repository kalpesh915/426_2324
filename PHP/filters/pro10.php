<?php
    $ip1 = "https://www.vanzarafamily.co.in"; 

    if(filter_var($ip1, FILTER_VALIDATE_URL) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>