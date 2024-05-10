<?php
/*
    array_udiff() 	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
*/

    
function compare($x, $y){
    if($x === $y){
        return 0;
    }else{
        return ($x > $y ? 1 : -1);
    }
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_udiff($a1,$a2,"compare");
print_r($result);
?>