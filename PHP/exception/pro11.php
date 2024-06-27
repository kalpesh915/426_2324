<?php
    function msg1(){
        msg2();
    }

    function msg2(){
        msg3();
    }

    function msg3(){
        msg4();
    }

    function msg4(){
        msg5();
    }

    function msg5(){
        throw new Exception("This is Propogated Error Message");
    }

    try{
        msg1();
    }catch(Exception $error){
        echo "<hr> Error is $error";
    }

?>