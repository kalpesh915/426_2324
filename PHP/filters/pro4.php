<?php
    //$ip1 = "<h1>Welcome to PHP Filters</h1>";
    $ip1 = "<script>alert('Your coumputer is Hacked by Smit')</script>";

    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);

    echo $ip1;
?>