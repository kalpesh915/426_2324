<?php
/*
    array_rand() 	Returns one or more random keys from an array
*/

$a=array("red","green","blue","yellow", "black", "purple", "cyan", "orange");
$random_keys=array_rand($a,2);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";

?>