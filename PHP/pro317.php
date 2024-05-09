<?php
    /*
        array_diff_assoc() 	Compare arrays, and returns the differences (compare keys and values)
    */
    
    $array1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Dahod"];
    $array2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Daman"];
    //$array2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "e" => "Dahod"];
    //$array2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Daman"];

    $result = array_diff_assoc($array1, $array2);

    print_r($result);
?>