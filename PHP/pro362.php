<?php
/*
    compact() 	Create array containing variables and their values
*/

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

print_r($result);
?>