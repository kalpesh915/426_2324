<?php
    $file = fopen("data.txt", "r") or die("Unable process file");

    while(!feof($file)){ // file end of file
        echo fgetc($file)." "; // file get character
    }

    fclose($file);
?>