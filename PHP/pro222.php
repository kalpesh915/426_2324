<?php
    /*
        PHP do while Loop
        The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.

        do{
            executable code
        }while(condition);
    */

    $i = 100;

    do{
        echo "$i ";
        $i++;
    }while($i <= 10);

    /*
        Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false.
    */
        
?>