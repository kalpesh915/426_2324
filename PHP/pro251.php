<?php
    /*
        PHP Return Type Declarations
        PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
        To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function. In the following example we specify the return type for the function:
    */

    declare(strict_types=1); // strict type declaration must be in first line of your code
    function divide(int $ip1, int $ip2) : int {
        return (int) ($ip1 / $ip2);        
    }

    $ans = divide(111, 22);    echo "<hr> Answer is $ans";
?>