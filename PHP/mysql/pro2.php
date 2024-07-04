<?php
    /*
        Example (MySQLi Procedural)
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($hostname, $username, $password);

    // check for connection
    if(!$connection){
        die("Connection Failed ".mysqli_connect_error());
    }else{
        echo "<hr>Connection Successfully<hr>";
    }

    // close connection
    mysqli_close($connection);
?>