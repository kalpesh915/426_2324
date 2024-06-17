<?php
    //print_r($_POST);

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST["city"];

    echo "Welcome {$fname} {$lname} to {$city}";
?>