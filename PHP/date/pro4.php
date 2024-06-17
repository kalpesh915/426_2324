<?php
    echo "<hr>Time zone is ".date_default_timezone_get();
    date_default_timezone_set("Asia/Kolkata");
    echo "<hr>Time zone is ".date_default_timezone_get();
?>