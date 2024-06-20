<?php
    $file = fopen("data.txt", "r") or die("Unable process file");

    echo fgets($file);
    echo fgets($file);
    echo fgets($file);
    echo fgets($file);
    echo fgets($file);

    fclose($file);
?>