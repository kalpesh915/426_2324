<?php
    /*
        The break Keyword
        When PHP reaches a break keyword, it breaks out of the switch block. This will stop the execution of more code, and no more cases are tested. The last block does not need a break, the block breaks (ends) there anyway.
        Warning: If you omit the break statement in a case that is not the last, and that case gets a match, the next case will also be executed even if the evaluation does not match the case!
    */

    $color = "green";

    switch($color){
        case "red":{
            echo "<hr> Selected Color is Red";
        }
        case "green":{
            echo "<hr> Selected Color is Green";
        }
        case "blue":{
            echo "<hr> Selected Color is Blue";
        }
        default:{
            echo "<hr> Selected Color is Out of RGB";
        }
    }

?>