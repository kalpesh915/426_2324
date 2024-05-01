<?php
    /*
        print greetings
    */ 

    date_default_timezone_set("Asia/Kolkata");
    $hours = date("H");

    //echo $hours;

    if($hours >= 7 && $hours <= 20){
        echo "Good Day";
    }else{
        echo "Good Evening";
    }
?>
