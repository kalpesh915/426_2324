<?php
    /*
        PHP Associative Arrays
        Associative arrays are arrays that use named keys that you assign to them.
    */

    $data = array("roll" => 1, "fname" => "Aryan", "lname" => "Thakrar", "city" => "Rajkot", "married" => false, "marks" => 78.89);

    echo "<hr>";

    foreach($data as $key => $value){
        echo "<hr> $key is ".var_dump($value);
    }
    
?>