<?php
/*  
    Cast to Boolean : To cast to boolean, use the (bool) statement:

    If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.
*/

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;



echo "<hr>"; var_dump($a);
echo "<hr>"; var_dump($b);
echo "<hr>"; var_dump($c);
echo "<hr>"; var_dump($d);
echo "<hr>"; var_dump($e);
echo "<hr>"; var_dump($f);
echo "<hr>"; var_dump($g);
echo "<hr>"; var_dump($h);
echo "<hr>"; var_dump($i);

?>
