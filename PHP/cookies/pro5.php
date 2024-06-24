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

        if(isset($_COOKIE["username"])){
            echo "Welcome ".$_COOKIE["username"];
        }else{
            echo "Welcome Guest";
        }
    ?>


</body>
</html>