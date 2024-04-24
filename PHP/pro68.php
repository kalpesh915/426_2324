<?php
/*  
    html_entity_decode() 	Converts HTML entities to characters
*/

$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
//'<a href="https://www.w3schools.com">w3schools.com</a>';
echo html_entity_decode($str);
?>
