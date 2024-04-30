<?php
    /*
        != 	Not equal 	$x != $y 	Returns true if $x is not equal to $y 	
        <> 	Not equal 	$x <> $y 	Returns true if $x is not equal to $y
        !== Not identical 	$x !== $y 	Returns true if $x is not equal to $y, or they are not of the same type
    */ 

    echo "<hr>"; var_dump(11 <> 11);
    echo "<hr>"; var_dump(11 != 11);
    echo "<hr>"; var_dump(11 <> 111);
    echo "<hr>"; var_dump(11 != 111);
    echo "<hr>"; var_dump(11 != "11");
    echo "<hr>"; var_dump(11 !== "11");
?>
