<?php
    /*
        array_filter() 	Filters the values of an array using a callback function
    */

    function filter($x){
        return $x >= 18;
    }

    $data = [15, 58, 11, 17, 14, 52, 15, 23, 54, 74, 58, 1, 5, 52, 36, 13, 14, 15];

    $result = array_filter($data, "filter");

    print_r($result);
?>