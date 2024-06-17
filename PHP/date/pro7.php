<?php
    date_default_timezone_set("Asia/Kolkata");
    $somedate = strtotime("15 jan 2029 10:00:00");

    echo date("d/m/Y H:i:s l", $somedate);
?>