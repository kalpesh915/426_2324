<?php
/*
 == 	Equality 	$x == $y 	Returns true if $x and $y have the same key/value pairs
*/

$x = array("a" => "red", "b" => "green");  
$y = array("a" => "red", "b" => "green");  
//$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
?>