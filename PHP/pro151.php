<?php
/*  
    PHP Casting
    Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.   

    Change Data Type

    Casting in PHP is done with these statements:

    (string) - Converts to data type String
    (int) - Converts to data type Integer
    (float) - Converts to data type Float
    (bool) - Converts to data type Boolean
    (array) - Converts to data type Array
    (object) - Converts to data type Object
    (unset) - Converts to data type NULL

    Cast to String : To cast to string, use the (string) statement:

*/
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

echo "<hr>"; var_dump($a);
echo "<hr>"; var_dump($b);
echo "<hr>"; var_dump($c);
echo "<hr>"; var_dump($d);
echo "<hr>"; var_dump($e);
?>
