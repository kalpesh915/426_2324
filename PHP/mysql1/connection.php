<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "426example";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("Connection Failed Due to ".$connection->connect_error);
    }
?>