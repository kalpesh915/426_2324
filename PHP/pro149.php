<?php
/*  
    
*/

    echo "<hr> ";
    $x = 100;
    var_dump(is_numeric($x));
    echo "<hr> ";
    $x = "100";
    var_dump(is_numeric($x));
    echo "<hr> ";
    $x = "100.256";
    var_dump(is_numeric($x));
    echo "<hr> ";
    $x = "welcome";
    var_dump(is_numeric($x));
 ?>
