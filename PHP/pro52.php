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
            Slice From the End Use negative indexes to start the slice from the end of the string:
        */ 

              //01234567890123456789012345678901  
        $ip1 = "Smit vanzara from jetpur gujarat";
        $ans = substr($ip1, -19, 12); // 

        echo $ans;
    ?>
</body>
</html>