<?php
/*
    natcasesort() 	Sorts an array using a case insensitive "natural order" algorithm
*/

$temp_files = array("temp15.txt","Temp10.txt","temp1.txt","Temp22.txt","temp2.txt");

natsort($temp_files);
echo "Natural order: ";
print_r($temp_files);
echo "<br /><hr>";

natcasesort($temp_files);
echo "Natural order case insensitve: ";
print_r($temp_files);
?>