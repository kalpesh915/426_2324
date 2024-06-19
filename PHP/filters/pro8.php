<?php
    $ip1 = true; 

    if(filter_var($ip1, FILTER_VALIDATE_BOOLEAN) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>