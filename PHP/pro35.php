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
            Change Data Type
            If you assign an integer value to a variable, the type will automatically be an integer. If you assign a string to the same variable, the type will change to a string:
        */ 


        $ip1 = 15;
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 'rajkot';
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 15.58;
        echo "<hr>";
        var_dump($ip1);

        $ip1 = [];
        echo "<hr>";
        var_dump($ip1);

        $ip1 = true;
        echo "<hr>";
        var_dump($ip1);
    ?>
</body>
</html>