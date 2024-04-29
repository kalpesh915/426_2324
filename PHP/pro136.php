<?php
/*  
    ucwords() 	Converts the first character of each word in a string to uppercase
*/

$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo vfprintf($file,"Hello, There are %u million bicycles in %s.",array($number,$str));
?>
