<?php
    /*
        array_column() 	Returns the values from a single column in the input array
    */

    $data = array(
        array(
            "roll" => 1,
            "fname" => "Priyajitsinh",
            "lname" => "Jadeja"
        ),array(
            "roll" => 2,
            "fname" => "Dhruvisha",
            "lname" => "Bhatt"
        ),array(
            "roll" => 3,
            "fname" => "Devangi",
            "lname" => "Dave"
        ),array(
            "roll" => 4,
            "fname" => "Hensi",
            "lname" => "Lambiya"
        )
    );

    print_r(array_column($data, "fname"));
?>