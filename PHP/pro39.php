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
            Word Count : The PHP str_word_count() function counts the number of words in a string.
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php strings";
        echo "<hr> value of \$ip1 is <b>$ip1</b> and words are ".str_word_count($ip1);
    ?>
</body>
</html>