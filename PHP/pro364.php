<?php
/*
    current() 	Returns the current element in an array
*/

$city = ["rajkot", "baroda", "bhuj", "ahamdabad", "anand", "surat", "junagadh"];

echo "<hr>".current($city);
echo "<hr>".next($city);
echo "<hr>".next($city);
echo "<hr>".prev($city);
echo "<hr>".prev($city);
echo "<hr>".end($city);
echo "<hr>".reset($city);
?>