<?php
    $jsonData = '{
        "roll": 111,
        "fname": "Devangi",
        "lname": "Dave",
        "city": "Rajkot"
    }';

    // String to PHP
    $phpcode = json_decode($jsonData);

    echo "Welcome {$phpcode->fname} {$phpcode->lname} to {$phpcode->city} your roll no. is {$phpcode->roll}";
?>