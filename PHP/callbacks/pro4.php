<?php
    $students = ["Smit", "Aryan", "priyajitsinh", "Bhavik", "Vishal", "Hemal", "Devangi", "Hensi", "Dhruvisha"];

    $ans = array_map(function($name){
        return strlen($name);
    }, $students);

    print_r($ans);
?>