<?php
/*  
    sscanf() 	Parses input from a string according to a format
*/

$str = "age:30 weight:60kg year:30";
sscanf($str,"age:%d weight:%dkg year:%d",$age,$weight,$year);
// show types and values
var_dump($age,$weight,$year);
?>
