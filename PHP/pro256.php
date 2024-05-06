<?php
    /*
        PHP Indexed Arrays
        In indexed arrays each item has an index number.
        By default, the first item has index 0, the second item has item 1, etc.
    */

    $data = array("aryan", "Priyajitsinh", "Smit", "zeel", "hensi", "Hemal", "Dhruvisha", "Devangi", "Shilu");


    /*
        Access Indexed Arrays : To access an array item you can refer to the index number.
    */
    
    echo "<hr>".$data[0];

    /*
        Change Value : To change the value of an array item, use the index number:
    */

    $data[0] = "AryaN Thakar";

    echo "<hr>".$data[0];
?>