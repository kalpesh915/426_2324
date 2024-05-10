<?php
/*
    count() 	Returns the number of elements in an array
*/

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

echo count($result);
?>