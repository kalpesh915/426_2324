<?php
    /*
        print day name 
    */

    $day = 15;

    switch($day){
        case 0:{
            echo "<hr> Sunday";
            break;
        }
        case 1:{
            echo "<hr> Monday";
            break;
        }
        case 2:{
            echo "<hr> Tuesday";
            break;
        }
        case 3:{
            echo "<hr> Wednesday";
            break;
        }
        case 4:{
            echo "<hr> Thursday";
            break;
        }
        case 5:{
            echo "<hr> Friday";
            break;
        }
        case 6:{
            echo "<hr> Saturday";
            break;
        }
        default:{
            echo "<hr> Out of Range";
            break;
        }
    }
?>