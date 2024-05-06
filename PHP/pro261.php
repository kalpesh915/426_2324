<?php
    /*
        PHP Associative Arrays
        Associative arrays are arrays that use named keys that you assign to them.
    */

    $data = array("roll" => 1, "fname" => "Aryan", "lname" => "Thakrar", "city" => "Rajkot", "married" => false, "marks" => 78.89, "subjects" => array("C", "C++", "HTML", "CSS", "JS", "BootStrap", "node", "react", "PHP"));

    echo "<hr>";
    print_r($data);


    $data["fname"] = "ARYAN";

    echo "<hr>";
    print_r($data);
    
?>