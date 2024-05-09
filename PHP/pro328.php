<?php
    /*
        array_intersect_uassoc() 	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
    */

    
    function compare($x, $y){
        if($x === $y){
            return 0;
        }else{
            return ($x > $y ? 1 : -1);
        }
    }

    $data1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chotila", "d" => "Daman"];
    $data2 = ["a" => "Anand", "b" => "Barwada", "c" => "Chotila", "D" => "Dahod"];

    $result = array_intersect_uassoc($data1, $data2, "compare");

    print_r($result);
?>