<?php
    $students = ["Smit", "Aryan", "priyajitsinh", "Bhavik", "Vishal", "Hemal", "Devangi", "Hensi", "Dhruvisha"];

    function findLength($name){
        return strlen($name);
    }

    $ans = array_map("findLength", $students);

    print_r($ans);
?>