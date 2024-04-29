<?php
/*  
    Cast to Array : To cast to array, use the (array) statement:
    When converting into arrays, most data types converts into an indexed array with one element. NULL values converts to an empty array object.
*/

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;


echo "<hr>"; var_dump($a);
echo "<hr>"; var_dump($b);
echo "<hr>"; var_dump($c);
echo "<hr>"; var_dump($d);
echo "<hr>"; var_dump($e);
?>
