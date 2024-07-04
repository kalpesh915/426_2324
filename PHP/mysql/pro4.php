<?php
    /*
        Example of create database with MySqli OOP
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = new mysqli($hostname, $username, $password);

    if($connection->connect_error){
        die("<hr>Connection Failed due to ".$connection->connect_error);
    }else{
        // code for create database
        $sqlQuery = "create database 426example";

        if($connection->query($sqlQuery) === true){
            echo "<hr> Database Created";
        }else{
            echo "<hr> Error while creating Database";
        }
    }

    $connection->close();

?>