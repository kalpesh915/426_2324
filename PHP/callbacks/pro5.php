<?php
    function question($data){
        return $data." ?";
    }

    function comma($data){
        return $data." ,";
    }

    function exclaim($data){
        return $data." !";
    }

    function printer($data, $callback){
        echo $callback($data);
    }

    printer("Smit ", "question")
?>