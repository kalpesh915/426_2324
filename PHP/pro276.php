<?php
    /*
        Loop Through an Associative Array
        To loop through and print all the values of an associative array, you can use a foreach loop, like this:
    */

    $data = ["roll" => 1, "fname" => "Dhrvisha", "lname" => "Bhatt", "city" => "Rajkot"];

    foreach($data as $value){
        echo "<hr> $value";
    }
?>