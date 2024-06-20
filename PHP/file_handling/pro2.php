<?php
    $file = fopen("data.txt", "r") or die("Unable process file");

    echo fread($file, 100);

    fclose($file);
?>