<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            PHP Case Sensitivity
            In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
            Note: However; all variable names are case-sensitive!
        */ 

        $username = "smit";

        echo "<hr> Welcome $username";
        echo "<hr> Welcome $Username";
        echo "<hr> Welcome $userName";
    ?>
</body>
</html>