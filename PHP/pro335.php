<?php
    /*
        array_merge_recursive() 	Merges one or more arrays into one array recursively
    */

    $a1=array("a"=>"red","b"=>"green");
    $a2=array("c"=>"blue","b"=>"yellow");
    $a3=array("c"=>"brown","b"=>"black");
    print_r(array_merge_recursive($a1,$a2,$a3));
?>