<?php
/*
    array_udiff_uassoc() 	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
*/

    

function compare_k($x, $y){
    if($x === $y){
        return 0;
    }else{
        return ($x > $y ? 1 : -1);
    }
}    

function compare_v($x, $y){
    if($x === $y){
        return 0;
    }else{
        return ($x > $y ? 1 : -1);
    }
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_udiff_uassoc($a1,$a2,"compare_v", "compare_k");
print_r($result);
?>