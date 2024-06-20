<?php
    // run multiple time
    $file = fopen("data2.txt", "w") or die("Unable process file");

    fwrite($file, "Welcome to world of file Handling in PHP \n");

    fclose($file);
?>