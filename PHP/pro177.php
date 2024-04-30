<?php
    /*
        or 	Or 	$x or $y 	True if either $x or $y is true
        Logical OR (or, ||)

        Truth Table
        cond.1  cond.2  answer
        true    true    true
        true    false   true
        false   true    true
        false   false   false
    */ 

    echo "<hr>"; var_dump(15 > 5 or 15 > 10);
    echo "<hr>"; var_dump(15 > 5 or 15 > 100);
    echo "<hr>"; var_dump(15 > 50 or 15 > 10);
    echo "<hr>"; var_dump(15 > 50 or 15 > 100);

    echo "<hr>"; var_dump(15 > 5 || 15 > 10);
    
?>
