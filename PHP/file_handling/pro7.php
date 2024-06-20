<?php
    $file = fopen("data1.txt", "w") or die("Unable process file");

    fwrite($file, "Welcome to world of file Handling in PHP \n");

    fclose($file);
?>