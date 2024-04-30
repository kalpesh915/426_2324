<?php
    /*
        ?? 	Null coalescing 	
        $x = expr1 ?? expr2 	Returns the value of $x.
        The value of $x is expr1 if expr1 exists, and is not NULL.  
        If expr1 does not exist, or is NULL, the value of $x is expr2.
        Introduced in PHP 7
    */ 

    $ip1 = 152;
    $ip2;
      
    //$ans = $ip1 + $ip2; 
    $ans = ($ip1 ?? 0) + ($ip2 ?? 0); 

    echo "Sum is $ans"; 
?>
