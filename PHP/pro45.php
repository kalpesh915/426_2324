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
            Remove Whitespace
            Whitespace is the space before and/or after the actual text, and very often you want to remove this space.
        */ 

              //01234567890123456789012345678901234567890
        $ip1 = "     Welcome to world of PHP strings     ";
        echo "<hr>".strlen($ip1);
        $ip1 = rtrim($ip1);
        echo "<hr>".strlen($ip1);
        $ip1 = ltrim($ip1);
        echo "<hr>".strlen($ip1);
    ?>
</body>
</html>