<?php
    /*
        Update Array Item
        To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
    */

    $data = ["Rajkot", "Baroda", "Bhuj", "Junagadh", "Ahamdabad", "Surat", "Morbi"];

    foreach($data as $value){
        echo " $value";
    }

    $data[0] = "Rajula";
    $data[2] = "Bhavnagar";

    echo "<hr>Updated Data is :<hr>";
    foreach($data as $value){
        echo " $value";
    }
?>