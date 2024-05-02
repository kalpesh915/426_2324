<?php
    /*
        PHP switch Statement
        The switch statement is used to perform different actions based on different conditions.

        The PHP switch Statement : Use the switch statement to select one of many blocks of code to be executed.
        Syntax

        switch (expression) {
            case label1:
                //code block
                break;
            case label2:
                //code block;
                break;
            case label3:
                //code block
                break;
            default:
            //code block
        }

        This is how it works:

        The expression is evaluated once
        The value of the expression is compared with the values of each case
        If there is a match, the associated block of code is executed
        The break keyword breaks out of the switch block
        The default code block is executed if there is no match
    */

    $color = "green";

    switch($color){
        case "red":{
            echo "<hr> Selected Color is Red";
            break;
        }
        case "green":{
            echo "<hr> Selected Color is Green";
            break;
        }
        case "blue":{
            echo "<hr> Selected Color is Blue";
            break;
        }
        default:{
            echo "<hr> Selected Color is Out of RGB";
            break;
        }
    }

?>