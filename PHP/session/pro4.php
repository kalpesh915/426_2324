<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once("menu.php");

        $_SESSION["username"] = "Aryan Thakrar";
        $_SESSION["city"] = "Rajkot";
        $_SESSION["class"] = "7 to 9";

        echo "Session Updated";
    ?>
</body>
</html>