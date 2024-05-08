<?php
    /*
        Using the unset Function
        You can also use the unset() function to delete existing array items.
        Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
    */

    $data = ["Hensi", "Dhruvisha", "Devangi", "Hemal", "Smit", "priyajitsinh", "zeel", "aryan"];

    echo "<hr>Array before Remove <hr>";

    print_r($data);

    unset($data[1]);
    unset($data[2]);
    
    echo "<hr>Array after Remove <hr>";

    print_r($data);
?>