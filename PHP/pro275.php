<?php
    /*
        Excecute a Function Item
        Array items can be of any data type, including function. 
        To execute such a function, use the index number followed by parentheses ():
    */

    function greetings(){
        echo "<hr> Welcome to PHP";
    }

    $data = ["roll" => 1, "fname" => "Dhrvisha", "lname" => "Bhatt", "city" => "Rajkot", "msg" => 'greetings'];

    $data["msg"]();
?>