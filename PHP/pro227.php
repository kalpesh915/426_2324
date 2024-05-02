<?php
    /*
        The continue Statement : With the continue statement we can stop the current iteration, and continue with the next:
    */

    for($i=1; $i<=10; $i++){
        if($i == 5){
            continue;
        }

        echo " $i";
    }
        
?>