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
            die("<hr> Connection Failed ".$connection->connect_error);
        }

        //$sqlQuery = "select * from students order by lname";
        $sqlQuery = "select * from students order by lname desc";

        $result = $connection->query($sqlQuery);

        if($result->num_rows > 0){
            echo "<table border='1'>";

            while($row = $result->fetch_assoc()){
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
        }else{
            echo "<hr>No Data Found<hr>";
        }

        $connection->close();
    ?>
</body>
</html>