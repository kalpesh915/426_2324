<?php
    $ip1 = "welcOme to world of php with w3schools 1 11 111 1111 11111 111111 1111111 12 132 1452 1122 123123 1234 12 $##@";
    $pattern = "/1{3,}/";

    echo "<hr> Original String is : $ip1";
    echo "<hr>".preg_replace($pattern, "*", $ip1);
?>