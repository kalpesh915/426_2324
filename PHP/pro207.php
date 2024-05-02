<?php
    /*
        The default Keyword : 
        The default keyword specifies the code to run if there is no case match:
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
            break; // not required
        }
    }

?>