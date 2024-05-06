<?php
    /*
      Array Keys When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:
    */

    $data = [];

    $data["std1"] = "Priyajitsinh";
    $data["std2"] = "Smit";
    $data["std3"] = "Zeel";
    $data["std4"] = "Jeel";
    $data["std5"] = "Aryan";
    

    foreach($data as $key => $value){
        echo "<hr> $key = $value ";
    }
    
?>