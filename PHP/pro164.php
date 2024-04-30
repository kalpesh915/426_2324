<?php
    namespace Rajkot;
    /*
    */ 

    class Student{
        // method
        function greetings(){
            echo "<hr> Class Name is ".__CLASS__;
            echo "<hr> Method Name is ".__METHOD__;
            echo "<hr> Name Space Name is ".__NAMESPACE__;
            echo "<hr> ClassName is ".Student::class;
        }
    }

    $obj1 = new Student();
    $obj1->greetings();
?>