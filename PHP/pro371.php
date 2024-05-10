<?php
/*
    shuffle() 	Shuffles an array
*/
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);

echo "<hr> ".sizeof($my_array);
?>