<?php
    /*
        array_intersect() 	Compare arrays, and returns the matches (compare values only)
    */

    $data1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chotila", "d" => "Daman"];
    //$data2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chotila", "d" => "Daman"];
    $data2 = ["a" => "Ahamdabad", "b" => "Barwada", "c" => "Chotila", "d" => "Dahod"];

    $result = array_intersect($data1, $data2);

    print_r($result);
?>