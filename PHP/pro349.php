<?php
/*
    array_splice() 	Removes and replaces specified elements of an array
*/

$a1=array("red", "green", "blue", "yellow");
$a2=array("purple", "orange");
array_splice($a1,0,2,$a2);
print_r($a1);

?>