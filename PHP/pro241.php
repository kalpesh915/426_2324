<?php
    /*
        In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
    */

    $ans = 10;

    function add10($ans){
        $ans = $ans + 10;
        echo "<hr>Answer Inside of Function is $ans";
    }

    add10($ans);

    echo "<hr>Answer Outside of Function is $ans";
?>