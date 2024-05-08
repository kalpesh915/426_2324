<?php
    /*
        Add Array Item
        To add items to an existing array, you can use the bracket [] syntax.   
    */

    $data = ["Hensi", "Dhruvisha", "Devangi", "Hemal"];

    echo "<hr>Array before new value add <hr>";

    print_r($data);

    $data[] = "Smit";
    $data[] = "Priyajitsinh";
    $data[] = "Aryan";
    $data[] = "Zeel";

    echo "<hr>Array after new value add <hr>";

    print_r($data);
?>