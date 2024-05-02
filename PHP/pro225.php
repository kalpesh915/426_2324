<?php
    /*
        PHP for Loop
        The for loop - Loops through a block of code a specified number of times.

        The PHP for Loop : The for loop is used when you know how many times the script should run.

        Syntax
        for (expression1, expression2, expression3) {
            // code block
        }

        for(initialization; condition; increment / decrement){
            executable code
        }

        This is how it works:

        expression1 is evaluated once
        expression2 is evaluated before each iteration
        expression3 is evaluated after each iteration
    */

    $ip = 18;

    for($i=1; $i<=10; $i++){
        echo "<br> {$ip} * {$i} = ".($ip * $i);
    }
        
?>