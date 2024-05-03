<?php
    /*
        The real power of PHP comes from its functions.
        PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

        PHP User Defined Functions
        Besides the built-in PHP functions, it is possible to create your own functions.
        A function is a block of statements that can be used repeatedly in a program.
        A function will not execute automatically when a page loads.
        A function will be executed by a call to the function.

        Create a Function A user-defined function declaration starts with the keyword function, followed by the name of the function:
    */

    // Tip: Give the function a name that reflects what the function does!

    function greetings(){
        echo "<hr>Welcome to world of Functions";
    }

    // Call a Function : To call the function, just write its name followed by parentheses ():

    greetings();
    greetings();
    greetings();
    greetings();
    greetings();
        
?>