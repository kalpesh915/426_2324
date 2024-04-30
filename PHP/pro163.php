<?php
    /*
        PHP Magic Constants
        PHP Predefined Constants : PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants". These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.
    */ 

    
    function msg(){
        echo "<hr> Function Name is ".__FUNCTION__;
    }

    msg();

?>