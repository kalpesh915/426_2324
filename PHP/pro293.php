<?php
    /*
        Using the array_diff Function
        You can also use the array_diff() function to remove items from an associative array.
    */

    $data = ["roll" => 1, "fname" => "Smit", "lname" => "Vanzara", "city" => "Rajkot"];

    echo "<hr>Array before Remove <hr>";

    print_r($data);

    $data = array_diff($data, ["Smit", "Rajkot"]);
    // Note: The array_diff() function takes values as parameters, and not keys.
    echo "<hr>Array after Remove <hr>";

    print_r($data);
?>