<?php
    /*
        xor 	Xor 	$x xor $y 	True if either $x or $y is true, but not both

        Truth Table
        cond.1  cond.2  answer
        true    true    false
        true    false   true
        false   true    true
        false   false   false
    */ 

    echo "<hr>"; var_dump(15 > 5 xor 15 > 10);
    echo "<hr>"; var_dump(15 > 5 xor 15 > 100);
    echo "<hr>"; var_dump(15 > 50 xor 15 > 10);
    echo "<hr>"; var_dump(15 > 50 xor 15 > 100);    
?>
