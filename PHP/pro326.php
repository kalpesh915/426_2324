<?php
    /*
        array_intersect_assoc() 	Compare arrays and returns the matches (compare keys and values)
    */

    $data1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chotila", "d" => "Daman"];
    $data2 = ["a" => "Anand", "b" => "Barwada", "c" => "Chotila", "d" => "Dahod"];

    $result = array_intersect_assoc($data1, $data2);

    print_r($result);
?>