<?php
    $ip1 = "welcOme to world of php with w3schools 1 12 132 1452 1122 123123 1234 12";
    $pattern = "/[^a-k]/i";
    echo "<hr>".preg_replace($pattern, "*", $ip1);
?>