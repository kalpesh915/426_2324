<?php

    function makeDiv($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Division is not Possible");
        }else{
            return ($ip1 / $ip2);
        }
    }

    echo "<hr> Before Error Code";

    try{
        //echo "<hr> Division is : ".makeDiv(111, 0);
        echo "<hr> Division is : ".makeDiv(111, 10);
    }catch(Exception $error){
        echo "<hr> Error is $error";
    }finally{
        echo "<hr> This is Finally block";
    }
    
    echo "<hr> After Error Code";
?>