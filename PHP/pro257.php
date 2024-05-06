<?php
    /*
        Loop Through an Indexed Array : To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
    */

    $data = array("aryan", "Priyajitsinh", "Smit", "zeel", "hensi", "Hemal", "Dhruvisha", "Devangi", "Shilu");


    // example with for loop
    for($i=0; $i < count($data); $i++){
        echo "<hr> Welcome ".$data[$i];
    }
?>