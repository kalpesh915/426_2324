<?php
    /*
        Double or Single Quotes
        You can use both double and single quotes when accessing an array:
    */

    $data = ["roll" => 1, "fname" => "Dhrvisha", "lname" => "Bhatt", "city" => "Rajkot"];

    echo "<hr>".$data['fname'];
    echo "<hr>".$data["fname"];
?>