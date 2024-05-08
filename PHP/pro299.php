<?php
    /*
        asort() - sort associative arrays in ascending order, according to the value
        arsort() - sort associative arrays in descending order, according to the value
    */

    $data = [11=>"Dhruvisha", 15=>"Smit", 7=>"Devangi", 17=>"Hensi", 35=>"Priyajitsinh", 45=>"Aryan", 16=>"Jeel", 39=>"Zeel", 32=>"Hemal"];

    echo "<hr>Array before Sort <hr>";

    print_r($data);

    arsort($data);
 
    echo "<hr>Array after Sort<hr>";
    print_r($data);
?>