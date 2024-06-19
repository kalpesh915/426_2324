<?php
    $students = ["Smit", "Aryan", "priyajitsinh", "Bhavik", "Vishal", "Hemal", "Devangi", "Hensi", "Dhruvisha"];

    $count = count($students);

    for($i = 0; $i < $count; $i++){
        $name = $students[$i];
        echo " ".strlen($name);
    }

?>