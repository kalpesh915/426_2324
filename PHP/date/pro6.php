<?php
    date_default_timezone_set("Asia/Kolkata");
    $somedate = mktime(15, 15, 10, 3, 23, 2020);

    // return number of seconds from 1st jan 1970 00:00:00 
    //echo $somedate;

    echo date("d/m/Y H:i:s l", $somedate);
?>