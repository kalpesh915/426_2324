<?php
    /*
        The while loop does not run a specific number of times, but checks after each iteration if the condition is still true.

        The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.

        count how many digits in entered number

        12548 = 5
    */

    $ip = 1269654;
    $ans = 0;

    while($ip > 0){
        $ans++;
        $ip = (int) ($ip / 10);
    }

    echo "<hr> Total Digits are $ans";

?>