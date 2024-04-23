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
            PHP The static Keyword
            Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
            To do this, use the static keyword when you first declare the variable:
        */ 

        function counter(){
            static $count = 1;
            echo " ".$count;
            $count++;
        }

        counter();
        counter();
        counter();
        counter();
        counter();
        counter();        
        counter();
        
        /*
            Then, each time the function is called, that variable will still have the information it contained from the last time the function was called. Note: The variable is still local to the function.
        */ 
    ?>
</body>
</html>