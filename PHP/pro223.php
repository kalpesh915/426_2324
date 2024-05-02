<?php
    /*
        The break Statement : With the break statement we can stop the loop even if the condition is still true:
    */

    $i = 1;

    do{
        if($i == 5){
            break;
        }
        echo "$i ";
        $i++;
    }while($i <= 10);

        
?>