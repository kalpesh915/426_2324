<?php
    $ip1 = 0;

    if(filter_var($ip1, FILTER_VALIDATE_INT) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>