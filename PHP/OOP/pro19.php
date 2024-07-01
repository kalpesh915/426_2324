<?php
    final class ParentClass{
        public function greetings(){
            echo "<hr> Good Morning";
        }
    }

    class ChildClass extends ParentClass{
        public function greetings(){
            echo "<hr> Very Good Morning";
        }
    }

    $cc = new ChildClass();
    $cc->greetings();
?>