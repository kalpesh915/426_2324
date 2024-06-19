<?php
    $ip1 = "https://www.vanzarafamily.co.in?name=smit&city=Rajkot"; 

    if(filter_var($ip1, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>