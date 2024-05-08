<?php
    /*
        PHP - Multidimensional Arrays
        A multidimensional array is an array containing one or more arrays.
        PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
    */

    $students = array(
        array(1, "Priyajitsinh", "Jadeja", "Rajkot"),
        array(2, "Smit", "Vanzara", "Rajkot"),
        array(3, "Zeel", "Nimavat", "Rajkot"),
        array(4, "Aryan", "Thakar", "Rajkot")
    );


    foreach($students as $student){
        foreach($student as $data){
            echo " $data";
        }
        echo "<hr>";
    }
?>