<?php
/*
    extract() 	Imports variables into the current symbol table from an array
*/

$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c";
?>