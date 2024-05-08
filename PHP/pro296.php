<?php
    /*
        sort() - sort arrays in ascending order
        rsort() - sort arrays in descending order
    */

    $data = ["Dhruvisha", "Smit", "Devangi", "Hensi", "Priyajitsinh", "Aryan", "Jeel", "Zeel", "Hemal"];

    echo "<hr>Array before Sort <hr>";

    print_r($data);

    sort($data);
 
    echo "<hr>Array after Sort<hr>";
    print_r($data);
?>