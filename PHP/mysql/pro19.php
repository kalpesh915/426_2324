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
            delete data from table
        */

        //$sqlQuery = "delete from students where id > 50";
        //$sqlQuery = "delete from students where fname = 'smit'";
        $sqlQuery = "delete from students";
        $connection->query($sqlQuery);

        echo "Total ".$connection->affected_rows." Rows are Deleted";

        $connection->close();
    ?>
</body>
</html>