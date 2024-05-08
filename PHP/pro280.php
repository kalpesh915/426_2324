<?php
    /*
        To update items from an associative array, use the key name:
    */

    $data = ["roll" => 1, "fname" => "Dhruvisha", "lname" => "Bhatt"];

    foreach($data as $value){
        echo " $value";
    }

    $data["fname"] = "Devangi";
    $data["lname"] = "Dave";
    
    echo "<hr>Updated Data is :<hr>";
    foreach($data as $value){
        echo " $value";
    }
?>