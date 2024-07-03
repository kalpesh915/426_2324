<?php
    class SampleClass{
        public static $greetings = "Welcome to world of OOPs";
    }

    class ChildClass extends SampleClass{
        public function __construct(){
            //echo SampleClass::$greetings;
            echo parent::$greetings;
        }
    }

    new ChildClass();
?>