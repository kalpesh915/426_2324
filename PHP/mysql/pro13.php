<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
</head>
<body>
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
    echo "<table class='table table-hover table-striped' id='myData'>
    <thead>
    <tr class='table-dark'>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Created At</th>
    </tr></thead> <tbody>";
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

    echo "</tbody></table>";
    // close connection
    $connection->close();

?>

</body>
</html>

<script>
    $(document).ready(function(){
        let myData = new DataTable("#myData");
    });
</script>