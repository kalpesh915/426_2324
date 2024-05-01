<?php
    /*
        PHP Nested if Statement
        Nested If : You can have if statements inside if statements, this is called nested if statements.

        if(condition 1){
            if(condition 2){
                code executed if condition 1 and 2 both are true
            }else{
                code executed if condition 1 is true and condition 2 is false    
            }
        }else{
            code executed if condition 1 is false
        }

        find maximum out of three numbers with nested if
    */

    $ip1 = 10;
    $ip2 = 20;
    $ip3 = 30;

    if($ip1 > $ip2){
        if($ip1 > $ip3){
            $ans = $ip1;
        }else{
            $ans = $ip3;
        }
    }else{
        if($ip2 > $ip3){
            $ans = $ip2;
        }else{
            $ans = $ip3;
        }
    }

    echo "<hr> Maximum is $ans";
?>