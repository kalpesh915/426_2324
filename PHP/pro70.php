<?php
/*  
    htmlspecialchars_decode() 	Converts some predefined HTML entities to characters
*/

$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);

?>
