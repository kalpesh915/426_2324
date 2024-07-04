<?php
    /*
        Example of create Table in Database with MySqli OOP
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "426example";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr>Connection Failed due to ".$connection->connect_error);
    }else{
        // code for create database
        $sqlQuery = "create table students (id int auto_increment primary key, fname varchar(20), lname varchar(20), city varchar(20), email varchar(64), phone varchar(15), gender varchar(6), created_at timestamp default current_timestamp)";

        if($connection->query($sqlQuery) === true){
            echo "<hr> Table Created";
        }else{
            echo "<hr> Error while creating Table";
        }
    }

    $connection->close();

?>