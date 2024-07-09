<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "426example";

        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die("Connection Failed ".$connection->connect_error);
        }

        /*
            update data in table
        */

        //$sqlQuery = "update students set fname = 'SMIT' where fname = 'smit'";
        //$sqlQuery = "update students set fname = 'SMIT', lname = 'VANZARA', gender = 'MALE' where fname = 'smit'";
        $sqlQuery = "update students set city = 'Ahamdabad'";
        $connection->query($sqlQuery);

        echo "Total ".$connection->affected_rows." Rows are Updated";

        $connection->close();
    ?>
</body>
</html>