<?php
    date_default_timezone_set("Asia/Kolkata");
    $somedate = strtotime("next sunday");

    echo date("d/m/Y H:i:s l", $somedate);
?>