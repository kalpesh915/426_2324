<?php
    date_default_timezone_set("Asia/Kolkata");
    $somedate = strtotime("+15 month");

    echo date("d/m/Y H:i:s l", $somedate);
?>