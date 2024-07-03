<?php
    /*
        A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::)
    */

    class Sampleclass{
        public function __construct(){
            self::greetings();    
        }

        static function greetings(){
            echo "<hr> Good Evening";
        }
    }

    new Sampleclass();
?>