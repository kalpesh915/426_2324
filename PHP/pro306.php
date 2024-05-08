<?php
/*
 === 	Identity 	$x === $y 	Returns true if $x and $y have the same key/value pairs in the same order and of the same types
*/

$x = array("a" => "red", "b" => "green");  
$y = array("b" => "green", "a" => "red");  
//$y = array("b" => "red", "a" => "green");  
//$y = array("a" => "red", "b" => "green");  
//$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?>