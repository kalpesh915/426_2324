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

        echo "Session Values are {$_SESSION['username']} city is {$_SESSION['city']} class is {$_SESSION['class']}";
    ?>
</body>
</html>