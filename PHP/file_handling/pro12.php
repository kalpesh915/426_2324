<?php
    // file pointer
    $file = fopen("data3.txt", "r") or die("Unable process file");

    fseek($file, 100);
    echo "<hr> File Pointer at ".ftell($file);
    echo "<hr>".fgets($file);
    
    fclose($file);
?>