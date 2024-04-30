<?php
    /*
        PHP Comparison Operators : The PHP comparison operators are used to compare two values (number or string):
        == 	    Equal 	    $x == $y 	Returns true if $x is equal to $y 	
        === 	Identical 	$x === $y 	Returns true if $x is equal to $y, and they are of 
                                        the same type 	
    */ 

    echo "<hr>"; var_dump(11 == 11);
    echo "<hr>"; var_dump(11 == 111);
    echo "<hr>"; var_dump(101 == 11);
    echo "<hr>"; var_dump(111 == 111);
    echo "<hr>"; var_dump(11 == "11"); // value
    echo "<hr>"; var_dump(11 === "11"); // value + type
?>