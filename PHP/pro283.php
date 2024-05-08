<?php
    /*
        Update Array Items in a Foreach Loop
        There are different techniques to use when changing item values in a foreach loop.
        One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
    */

    $data = ["Hensi", "Dhruvisha", "Devangi", "Hemal"];

    foreach($data as &$student){
        $student = " Miss. $student";
        echo $student ;
    }

    echo "<hr> Array After Loop <hr>";

    print_r($data);
?>