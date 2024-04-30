<?php
    /*
        PHP Logical Operators
        The PHP logical operators are used to combine conditional statements.

        and 	And 	$x and $y 	True if both $x and $y are true

        Logical AND (and, &&)

        Truth Table
        cond.1  cond.2  answer
        true    true    true
        true    false   false
        false   true    false
        false   false   false
    */ 

    echo "<hr>"; var_dump(15 > 5 and 15 > 10);
    echo "<hr>"; var_dump(15 > 5 and 15 > 100);
    echo "<hr>"; var_dump(15 > 50 and 15 > 10);
    echo "<hr>"; var_dump(15 > 50 and 15 > 100);

    echo "<hr>"; var_dump(15 > 5 && 15 > 10);
    
?>
