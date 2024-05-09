<?php
    /*
        array_map() 	Sends each value of an array to a user-made function, which returns new values
    */

    function upperCase($x){
        return strtoupper($x);
    }

    $data1 = ["a" => "Ahamdabad", "b" => "Baroda", "c" => "Chotila", "d" => "Daman"];
    
    $result = array_map("upperCase", $data1);

    print_r($result);
?>