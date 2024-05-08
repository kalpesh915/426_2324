<?php
/*
    != 	Inequality 	$x != $y 	Returns true if $x is not equal to $y
    <> 	Inequality 	$x <> $y 	Returns true if $x is not equal to $y
*/

$x = array("a" => "red", "b" => "green");  
$y = array("b" => "gray", "a" => "red");  
//$y = array("b" => "green", "a" => "red");  

//var_dump($x != $y);
var_dump($x <> $y);
?>