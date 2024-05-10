<?php
    /*
        array_pad() 	Inserts a specified number of items, with a specified value, to an array
    */

    $a=array("red","green","orange", "cyan", "brown");
    print_r(array_pad($a,15,"blue"));
?>