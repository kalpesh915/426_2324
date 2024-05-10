<?php
/*
    in_array() 	Checks if a specified value exists in an array
*/

$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");

if(in_array("cat", $my_array)){
    echo "Yes";
}else{
    echo "No";
}
?>