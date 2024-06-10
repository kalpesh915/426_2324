<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="fn">Enter First Name</label>
        <input type="text" name="fname" id="fn" required><br>
        <label for="ln">Enter Last Name</label>
        <input type="text" name="lname" id="ln" required><br>
        <label for="ct">Enter City Name</label>
        <input type="text" name="city" id="ct" required><br>
        <input type="submit" value="Send Data" name="dataProcess">
    </form>
</body>
</html>

<?php

    if(isset($_POST["dataProcess"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];

        echo "<hr>Welcome $fname $lname to $city";
    }
?>