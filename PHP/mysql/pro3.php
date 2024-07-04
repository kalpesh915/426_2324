<?php
    /*
        Example (MySQL PDO)
        PDO = PHP Data Object
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $connection = new PDO("mysql:host=$hostname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr>Connection Successfully<hr>";
    }catch(Exception $error){
        echo "<hr> Error is $error";
    }finally{
        $connection = null;
    }
?>