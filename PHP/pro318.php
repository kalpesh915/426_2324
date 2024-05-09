<?php
    /*
        array_diff_key() 	Compare arrays, and returns the differences (compare keys only)
    */
    
    $array1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Dahod"];
    //$array2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Daman"];
    $array2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "e" => "Dahod"];
    $result = array_diff_key($array1, $array2);

    print_r($result);
?>