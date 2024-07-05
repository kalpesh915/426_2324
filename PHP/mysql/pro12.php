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

    // fetch one by one row from result set in assocative array format and print in table
    echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Created At</th>
    </tr>";
    while($row = $result->fetch_assoc()){
        //echo "<hr> Welcome {$row['fname']} {$row['lname']} to {$row['city']} phone no. {$row['phone']} email is {$row['email']}";
        echo "<tr>
            <td>$row[id]</td>
            <td>$row[fname]</td>
            <td>$row[lname]</td>
            <td>$row[city]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[gender]</td>
            <td>$row[created_at]</td>
        </tr>";
    }

    echo "</table>";
    // close connection
    $connection->close();

?>