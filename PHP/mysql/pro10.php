<?php
    /*
        exmaple of prepared statement
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "426example";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Unble to Connect with database server ".$connection->connect_error);
    }

    /*
        prepared statement
    */

    $preparedStatement = $connection->prepare("insert into students (fname, lname, city, email, phone, gender) values (?,?,?,?,?,?)");

    $preparedStatement->bind_param("ssssss", $fname, $lname, $city, $email, $phone, $gender);

    $fname = "Smit";
    $lname = "Vanzara";
    $city = "Rajkot";
    $email = "smit@gmail.com";
    $phone = "963214563210";
    $gender = "Male";

    if($preparedStatement->execute()){
        echo "Data Inserted";
    }

    $preparedStatement->close();
    $connection->close();
?>