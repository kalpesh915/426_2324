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

        echo "Values From Cookies are ".$_COOKIE["username"]." City ".$_COOKIE["city"]." College is ".$_COOKIE["college"];
    ?>


</body>
</html>