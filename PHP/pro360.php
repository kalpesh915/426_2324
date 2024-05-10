<?php
/*
    array_walk() 	Applies a user function to every member of an array
*/

function myfunction($value,$key){
    echo "The key $key has the value $value<br>";
}

$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
?>