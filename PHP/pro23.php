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
            PHP echo and print Statements
            With PHP, there are two basic ways to get output: echo and print.
            In this tutorial we use echo or print in almost every example. So, this chapter contains a little more info about those two output statements.
            PHP echo and print Statements
            echo and print are more or less the same. They are both used to output data to the screen. The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

        */ 

        echo "<hr> Welcome to PHP";
        echo ("<hr> Welcome to PHP");
        print "<hr> Welcome to PHP";
        print ("<hr> Welcome to PHP");
    ?>
</body>
</html>