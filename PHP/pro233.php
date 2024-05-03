<?php
    /*
        PHP Function Arguments
        Information can be passed to functions through arguments. An argument is just like a variable.
        Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.   
    */

    function greetings($username, $roll){
        // (username, roll) is arguments
        echo "<hr>Welcome $username to world of Functions your roll no. is $roll";
    }

    // name, and roll no. is parameters 
    greetings("Smit", 111);
    greetings("Aryan", 112);
    greetings("Priyajitsinh", 113);
    greetings("Zeel", 114);
    greetings("Nishait", 115);
?>