<?php
    /*
        A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::)
    */

    class Sampleclass{
        static function greetings(){
            echo "<hr> Good Evening";
        }
    }

    class ChildClass extends Sampleclass{
        public function __construct(){
            //Sampleclass::greetings();
            parent::greetings();
        }
    }   

    new ChildClass();
?>