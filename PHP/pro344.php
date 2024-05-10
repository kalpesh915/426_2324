<?php
/*
    array_replace_recursive() 	Replaces the values of the first array with the values from following arrays recursively
*/

$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
print_r(array_replace_recursive($a1,$a2));
?>