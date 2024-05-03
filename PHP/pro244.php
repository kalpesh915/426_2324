<?php
    /*
        Variable Number of Arguments
        By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.
        The variadic function argument becomes an array.
    */

    function sum(...$ip1){
        echo "<hr>"; print_r($ip1);
    }

    sum(11, 22);
    sum(11, 22, 33);
    sum(11, 22, 33, 44);
    sum(11, 22, 33, 44, 55);
    sum(11, 22, 33, 44, 55, 66);
    sum(11, 22, 33, 44, 55, 66, 77);
    sum(11, 22, 33, 44, 55, 66, 77, 88);
    sum(11, 22, 33, 44, 55, 66, 77, 88, 99);
    sum(11, 22, 33, 44, 55, 66, 77, 88, 99, 111);
?>