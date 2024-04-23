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
            Global and Local Scope
            A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

            PHP The global Keyword
            The global keyword is used to access a global variable from within a function.
        */ 
        $username = "Devangi Dave"; // Global
        function greetings(){
            global $username;
            echo "<hr> Welcome $username";
        }

        greetings();

        echo "<hr> Welcome $username (outside of function)";
    ?>
</body>
</html>