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

        setcookie("username", "", time() - 3600) ;
        setcookie("city", "", time() - 3600);
        setcookie("college", "", time() - 3600);

        echo "Cookies Deleted";
    ?>


</body>
</html>