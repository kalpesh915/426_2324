<?php
/*
    array_unshift() 	Adds one or more elements to the beginning of an array
*/
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
?>