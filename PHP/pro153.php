<?php
/*  
    Cast to Float : To cast to float, use the (float) statement:
*/

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;


echo "<hr>"; var_dump($a);
echo "<hr>"; var_dump($b);
echo "<hr>"; var_dump($c);
echo "<hr>"; var_dump($d);
echo "<hr>"; var_dump($e);
echo "<hr>"; var_dump($f);
echo "<hr>"; var_dump($g);

?>
