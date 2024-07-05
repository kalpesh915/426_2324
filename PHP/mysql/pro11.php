<?php
    /*
        select data from table
    */

    // declare required variables
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "426example";

    // create connection
    $connection = new mysqli($hostname, $username, $password, $database);

    // check connection
    if($connection->connect_error){
        die("Connection Failed ".$connection->connect_error);
    }

    // build a query
    $sqlQuery = "select * from students";

    // run a query
    $result = $connection->query($sqlQuery);

    //print_r($result);

    // fetch data from resultset

    // fetch one by one row from result set in assocative array format
    while($row = $result->fetch_assoc()){
        print_r($row);
        echo "<hr>";
    }

    // close connection
    $connection->close();

?>