<?php
    /*
        PHP Function Arguments
        Information can be passed to functions through arguments. An argument is just like a variable.
        Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.   
    */

    function greetings($username){
        echo "<hr>Welcome $username to world of Functions";
    }

    greetings("Smit");
    greetings("");
    //greetings();
?>