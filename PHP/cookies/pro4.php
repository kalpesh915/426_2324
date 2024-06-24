<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        date_default_timezone_set("Asia/Kolkata");

        require_once("menu.php");

        setcookie("username", "Aryan Thakar", time()+86400);
        setcookie("city", "Ahamdabad", time()+86400);
        setcookie("college", "Marwad", time()+86400);

        echo "Cookies Updated";
    ?>


</body>
</html>