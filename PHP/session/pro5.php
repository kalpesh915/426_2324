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

        if(isset($_SESSION["username"])){
            echo "Welcome {$_SESSION['username']}";
        }else{
            echo "Welcome Guest";
        }
    ?>
</body>
</html>