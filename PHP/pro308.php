<?php
/*
    !== 	Non-identity 	$x !== $y 	Returns true if $x is not identical to $y
*/

$x = array("a" => "red", "b" => "green");  
//$y = array("a" => "red", "b" => "green");  
$y = array("a" => "red", "b" => "gray");  

var_dump($x !== $y);

?>