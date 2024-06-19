<?php
    $ip1 = 15.5;

    if(filter_var($ip1, FILTER_VALIDATE_INT) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>