<?php
/*
    array_reduce() 	Returns an array as a string, using a user-defined function
*/

$a=array("red","green","blue","yellow", "black", "purple", "cyan", "orange");

function joint($a1, $a2){
    return $a1." - ". $a2;
}

$ans = array_reduce($a, "joint");
echo $ans;
?>