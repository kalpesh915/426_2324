<?php
    $ip1 = 51; 

    if(filter_var($ip1, FILTER_VALIDATE_INT, array("options"=>array("max_range" => 100, "min_range" => 1))) === $ip1){
        echo "<hr> Valid Data <hr>";
    }else{
        echo "<hr> Invalid Data <hr>";
    }
?>