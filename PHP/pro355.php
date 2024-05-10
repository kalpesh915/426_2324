<?php
/*
    array_uintersect_assoc() 	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
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

$result=array_uintersect_assoc($a1,$a2,"compare");
print_r($result);
?>