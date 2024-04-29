<?php
/*  
    PHP wordwrap() Function : 
    Wrap a string into new lines when it reaches a specific length:
*/

$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str, 10, "<br>\n");
?>
