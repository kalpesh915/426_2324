<?php
    /*
        The if...elseif...else statement executes different codes for more than two conditions. Syntax
        (ladder if)

        if (condition 1) {
            code to be executed if this condition 1 is true;    
        } else if (condition 2) {  
            // code to be executed if condition 1 is false and this condition 2 is true;
        } else {
            // code to be executed if all conditions are false;
        }

    */ 

    date_default_timezone_set("Asia/Kolkata");
    $hours = date("H");

    //echo $hours;

    if($hours >= 7 && $hours <= 11){
        echo "Good Morning";
    }else if($hours > 12 && $hours <= 14){
        echo "Good Noon";
    }else if($hours > 14 && $hours <= 16){
        echo "Good Afternoon";
    }else if($hours > 16 && $hours <= 20){
        echo "Good Evening";
    }else{
        echo "Good Night";
    }
?>
