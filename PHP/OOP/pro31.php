<?php
    class SampleClass{
        public static $greetings = "Welcome to world of OOPs";

        public function __construct(){
            echo self::$greetings;
        }
    }

    new SampleClass();
?>