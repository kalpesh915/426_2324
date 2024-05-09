<?php
    /*
        array_flip() 	Flips/Exchanges all keys with their associated values in an array
    */

    $data = ["roll" => 1, "fname" => "Hensi", "lname" => "Lambiya", "city" => "Rajkot"];

    $result = array_flip($data);

    print_r($result);
?>