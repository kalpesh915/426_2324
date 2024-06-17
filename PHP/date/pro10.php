<?php
    $destination = strtotime("31 dec");
    $days = ceil(($destination - time()) / 60 / 60 / 24);
    echo $days;
?>