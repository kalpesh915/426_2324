<?php
    /*
        Example (MySQLi Object-Oriented)
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = new mysqli($hostname, $username, $password);

    // check for connection
    if($connection->connect_error){
        die("Connection Failed ".$connection->connect_error);
    }else{
        echo "<hr>Connection Successfully<hr>";
    }

    // close connection
    $connection->close();
?>