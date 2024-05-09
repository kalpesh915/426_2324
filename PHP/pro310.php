<?php
    /*
        array_change_key_case() 	Changes all keys in an array to lowercase or uppercase
    */

    $data = array("roll" => 1, "fname" => "Hensi", "lname" => "Lambiya", "city" => "Rajkot");


    $data = array_change_key_case($data, CASE_UPPER);

    print_r($data);
?>