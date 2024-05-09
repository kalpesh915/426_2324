<?php
    /*
        array_combine() 	Creates an array by using the elements from one "keys" array and one "values" array
    */

    $roll = ["roll1", "roll2", "roll3", "roll4"];
    $fname = ["Priyajitsinh", "Dhruvisha", "Devangi", "Hensi"];

    print_r(array_combine($roll, $fname));
?>