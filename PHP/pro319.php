<?php
    /*
        array_diff_uassoc() 	Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
    */
    
    function compare($x, $y){
        if($x === $y){
            return 0;
        }else{
            return ($x > $y ? 1 : -1);
        }
    }

    $array1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Dahod"];
    $array2 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chennai", "d" => "Dahod"];

    $result = array_diff_uassoc($array1, $array2, "compare");

    print_r($result);
?>