<?php
    /*
        array_fill_keys() 	Fills an array with values, specifying keys
    */
    $keys = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j"];
    $result = array_fill_keys($keys, "Rajkot");

    print_r($result);
?>