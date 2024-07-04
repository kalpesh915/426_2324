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
        $sqlQuery = "insert into students (fname, lname, city, email, phone, gender) values ('Smit', 'Vanzara', 'Rajkot', 'smit@gmail.com', '9966332211', 'male');

        insert into students (fname, lname, city, email, phone, gender) values ('Aryan', 'Thakar', 'Rajkot', 'aryan@gmail.com', '8866332211', 'male'); 

        insert into students (fname, lname, city, email, phone, gender) values ('priyajitsinh', 'Jadeja', 'Rajkot', 'priyajitsinh@gmail.com', '8866332211', 'male'); 
        
        insert into students (fname, lname, city, email, phone, gender) values ('Hemal', 'Varu', 'Rajkot', 'hemal@gmail.com', '9966332211', 'female'); 
        
        insert into students (fname, lname, city, email, phone, gender) values ('Dhruvisha', 'Bhatt', 'Rajkot', 'dhruvisha@gmail.com', '9966332211', 'female');
        
        insert into students (fname, lname, city, email, phone, gender) values ('Devangi', 'Dave', 'Rajkot', 'devangi@gmail.com', '9966332211', 'female');";

        if($connection->multi_query($sqlQuery) === true){
            echo "<hr> Row Created";
        }else{
            echo "<hr> Error while creating Row";
        }
    }

    $connection->close();

?>