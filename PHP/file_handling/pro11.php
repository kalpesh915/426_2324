<?php
    // file pointer
    $file = fopen("data3.txt", "r") or die("Unable process file");

    echo "<hr> File Pointer at ".ftell($file);
    fgets($file);
    echo "<hr> File Pointer at ".ftell($file);
    fgets($file);
    echo "<hr> File Pointer at ".ftell($file);
    fgets($file);
    echo "<hr> File Pointer at ".ftell($file);

    fclose($file);
?>