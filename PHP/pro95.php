<?php
/*  
    str_getcsv() 	Parses a CSV string into an array
*/

$string = 'PHP,Java,Python,Kotlin,Swift,MySql,Node,JavaScript';
$data = str_getcsv($string);
print_r($data);
?>