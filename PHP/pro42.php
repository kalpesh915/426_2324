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
            Replace String
            The PHP str_replace() function replaces some characters with some other characters in a string.
        */ 

              //0123456789012345678901234567890
        $ip1 = "Welcome to world of PHP strings";
        echo "<hr>".str_replace("to", "TO", $ip1);
        echo "<hr>".str_replace("o", "O", $ip1);
    ?>
</body>
</html>