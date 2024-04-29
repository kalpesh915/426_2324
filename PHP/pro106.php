<?php
/*  
    strcoll() 	Compares two strings (locale based string comparison)
*/

setlocale (LC_COLLATE, 'NL');
echo strcoll("Hello World!","Hello World");
echo "<br>";

setlocale (LC_COLLATE, 'en_US');
echo strcoll("Hello World!","Hello World!");
?>