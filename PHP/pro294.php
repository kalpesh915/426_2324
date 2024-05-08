<?php
    /*
        Remove the Last Item : The array_pop() function removes the last item of an array.
    */

    $data = ["Dhruvisha", "Durvasha", "Duhsasan", "Duryodhan"];

    echo "<hr>Array before Remove <hr>";

    print_r($data);

    array_pop($data);
    array_pop($data);

    echo "<hr>Updated Array <hr>";
    print_r($data);
?>