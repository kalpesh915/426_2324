<?php
    /*
        The continue Statement : With the continue statement we can stop the current iteration, and continue with the next:
    */

    $i = 1;

    while($i <= 100){
        if($i %2 == 0){
            $i++;
            continue;
        }
        echo "$i ";
        $i++;
    }
?>