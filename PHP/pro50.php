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
            Slicing : You can return a range of characters by using the substr() function.Specify the start index and the number of characters you want to return.
        */ 

              //01234567890123456789012345678901  
        $ip1 = "Smit vanzara from jetpur gujarat";
        //$ans = substr($ip1, 5, 15);
        $ans = substr($ip1, 5, 7);

        echo $ans;
    ?>
</body>
</html>