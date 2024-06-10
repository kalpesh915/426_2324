<?php
    $ip1 = "welcome to world of php with w3schools";
    $pattern = "/k/i";
    echo "<hr>".preg_match($pattern, $ip1);
    $pattern = "/o/i";
    echo "<hr>".preg_match($pattern, $ip1);
?>