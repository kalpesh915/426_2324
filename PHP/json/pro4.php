<?php
    $jsonData = '{
        "roll": 111,
        "fname": "Devangi",
        "lname": "Dave",
        "city": "Rajkot"
    }';

    // String to PHP
    $phpcode = json_decode($jsonData);

    echo $phpcode;
?>