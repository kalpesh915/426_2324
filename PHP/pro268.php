<?php
    /*
      Array Keys When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:
    */

    $data = [
        "std1" => "Priyajitsinh", 
        "std2" => "Smit", 
        "std3" => "Zeel", 
        "std4" => "Jeel", 
        "std5" => "Aryan",
    ];

    foreach($data as $value){
        echo "<hr> $value ";
    }
    
?>