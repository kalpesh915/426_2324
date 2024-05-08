<?php
    /*
        Remove Item From an Associative Array
        To remove items from an associative array, you can use the unset() function.
        Specify the key of the item you want to delete.
    */

    $data = ["roll" => 1, "fname" => "Smit", "lname" => "Vanzara", "city" => "Rajkot"];

    echo "<hr>Array before Remove <hr>";

    print_r($data);

    unset($data["fname"], $data["city"]);
    echo "<hr>Array after Remove <hr>";

    print_r($data);
?>