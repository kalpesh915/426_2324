<?php
    function printer(iterable $students){
        foreach($students as $student){
            echo "<hr> Welcome {$student}";
        }
    }

    $students = array("Smit", "Priyajitsinh", "Aryan", "Zeel", "Hemal", "Dhruvisha", "Devangi", "Hensi");

    printer($students);
?>