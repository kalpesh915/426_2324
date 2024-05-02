<?php
    /*
        The break Statement : With the break statement we can stop the loop even if the condition is still true:
    */

    $i = 1;

    while($i <= 10){
        if($i == 5){
            break;
        }
        echo "$i ";
        $i++;
    }
?>