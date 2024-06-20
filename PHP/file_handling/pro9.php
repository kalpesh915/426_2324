<?php
    // run multiple time
    $file = fopen("data3.txt", "a") or die("Unable process file");

    fwrite($file, "Welcome to world of file Handling in PHP \n");

    fclose($file);
?>