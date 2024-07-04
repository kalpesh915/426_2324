<?php
    /*
        Example of create Row in Table with MySqli OOP
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
        $sqlQuery = "insert into students (fname, lname, city, email, phone, gender) values ('Smit', 'Vanzara', 'Rajkot', 'smit@gmail.com', '9966332211', 'male')";

        if($connection->query($sqlQuery) === true){
            echo "<hr> Row Created";
        }else{
            echo "<hr> Error while creating Row";
        }
    }

    $connection->close();

?>