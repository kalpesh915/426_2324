<?php
    /*
        Remove the First Item The array_shift() function removes the first item of an array.
    */

    $data = ["Dhruvisha", "Durvasha", "Duhsasan", "Duryodhan"];

    echo "<hr>Array before Remove <hr>";

    print_r($data);

    array_shift($data);
    array_shift($data);

    echo "<hr>Updated Array <hr>";
    print_r($data);
?>