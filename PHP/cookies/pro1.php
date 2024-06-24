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

        setcookie("username", "Smit Vanzara", time() + 60);
        setcookie("college", "Atmiya", time() + 60);
        setcookie("city", "jetpur", time() + 60);

        echo "Cookies created";
    ?>


</body>
</html>