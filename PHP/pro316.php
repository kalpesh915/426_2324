<?php
    /*
        array_diff() 	Compare arrays, and returns the differences (compare values only)
    */
    
    $array1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Dahod"];
    //$array2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Dahod"];
    $array2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Daman"];

    $result = array_diff($array1, $array2);

    print_r($result);
?>