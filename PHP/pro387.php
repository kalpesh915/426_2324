<?php
    $ip1 = "welcome to world of php with w3schools 1 12 132 1452 1122 123123 1234 12";
    $pattern = "/o/i";
    echo "<hr>".preg_replace($pattern, "*", $ip1);
?>