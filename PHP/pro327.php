<?php
    /*
        array_intersect_key() 	Compare arrays and returns the matches (compare keys)
    */

    $data1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chotila", "d" => "Daman"];
    //$data2 = ["a" => "Anand", "b" => "Barwada", "c" => "Chotila", "d" => "Dahod"];
    $data2 = ["a" => "Anand", "b" => "Barwada", "c" => "Chotila", "D" => "Dahod"];

    $result = array_intersect_key($data1, $data2);

    print_r($result);
?>