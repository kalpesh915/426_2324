<?php
    /*
        When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
    */

    $ans = 10;

    function add10(&$ans){
        $ans = $ans + 10;
        echo "<hr>Answer Inside of Function is $ans";
    }

    add10($ans);

    echo "<hr>Answer Outside of Function is $ans";
?>