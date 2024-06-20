<?php
    $file = fopen("data.txt", "r") or die("Unable process file");

    echo fread($file, filesize("data.txt"));

    fclose($file);
?>