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
            Negative Length : Use negative length to specify how many characters to omit, starting from the end of the string:
        */ 

              //01234567890123456789012345678901  
        $ip1 = "Smit vanzara from jetpur gujarat";
        $ans = substr($ip1, 10, -5); // 

        echo $ans;
    ?>
</body>
</html>