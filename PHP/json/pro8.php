<?php
    $jsonData = '{
        "roll": 111,
        "fname": "Devangi",
        "lname": "Dave",
        "city": "Rajkot"
    }';

    // String to PHP
    $phpcode = json_decode($jsonData, true);

    foreach($phpcode as $key => $value){
        echo "<hr> $key is $value";
    }
?>