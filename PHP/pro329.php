<?php
    /*
        array_intersect_ukey() 	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
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

    $result = array_intersect_ukey($data1, $data2, "compare");

    print_r($result);
?>