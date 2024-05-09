<?php
    /*
        array_map() 	Sends each value of an array to a user-made function, which returns new values
    */

    function Cube($x){
        return $x * $x * $x;
    }

    $data1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    
    $result = array_map("Cube", $data1);

    print_r($result);
?>