<?php
    /*
        Remove Array Item
        To remove an existing item from an array, you can use the array_splice() function.
        With the array_splice() function you specify the index (where to start) and how many items you want to delete.
    */

    $data = ["Hensi", "Dhruvisha", "Devangi", "Hemal", "Smit", "priyajitsinh", "zeel", "aryan"];

    echo "<hr>Array before Remove <hr>";

    print_r($data);

    array_splice($data, 1, 2);
    
    // After the deletion, the array gets reindexed automtically, starting at index 0.
    echo "<hr>Array after Remove <hr>";

    print_r($data);
?>