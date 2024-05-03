<?php
    /*
        PHP Default Argument Value
        The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
    */

    function greetings($username="Not Available", $roll = 0){
        echo "<hr>Welcome $username to world of Functions your roll no. is $roll";
    }

    greetings();
    greetings("Smit");
    greetings("Zeel", 112);
?>