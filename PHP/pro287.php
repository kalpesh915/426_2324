<?php
    /*
        Associative Arrays
        To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
    */

    $data = ["roll"=> 1, "fname"=>"Hensi", "lname" => "Lambiya"];

    echo "<hr>Array before new value add <hr>";

    print_r($data);

    $data += ["city" => "Rajkot", "edu" => "BCA", "year" => 2024];

    echo "<hr>Array after new value add <hr>";

    print_r($data);
?>