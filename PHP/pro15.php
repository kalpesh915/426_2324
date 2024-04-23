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
            Variables are "containers" for storing information.
        */

        $ip = 10;
        echo "<hr> Value of \$ip is $ip and type is ".gettype($ip);
        $ip = 10.50;
        echo "<hr> Value of \$ip is $ip and type is ".gettype($ip);
        $ip = false;
        echo "<hr> Value of \$ip is $ip and type is ".gettype($ip);
        $ip = 'Rajkot';
        echo "<hr> Value of \$ip is $ip and type is ".gettype($ip);
        $ip = "Rajkot";
        echo "<hr> Value of \$ip is $ip and type is ".gettype($ip);
    ?>
</body>
</html>







