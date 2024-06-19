<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require("menu.html");
        echo "<hr> Before Include some Content<hr>";
        require "data.txt";
        echo "<hr> After Include some Content";
        require("footer.php");
        require("footer.php");
        require("footer.php");
        require("footer.php");
        require("footer.php");
    ?>
</body>
</html>