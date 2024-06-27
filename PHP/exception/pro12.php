<?php
    try{
        throw new Exception("This is Error 1", 10);
    }catch(Exception $error1){
        try{
            throw new Exception("This is Error 2", 15);
        }catch(Exception $error2){
            echo "Error is $error2";
        }
    }
?>