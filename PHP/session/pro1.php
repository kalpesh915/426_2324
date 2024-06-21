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

        $_SESSION["username"] = "Smit Vanzara";
        $_SESSION["city"] = "Jetpur";
        $_SESSION["class"] = "4 to 6";

        echo "Sessions are created";
    ?>
</body>
</html>