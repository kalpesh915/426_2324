<?php
    abstract class RBI{
        abstract public function ATM();
    }

    class SBI extends RBI{
        public function ATM(){
            echo "<hr> SBI Provide ATM Card";
        }
    }

    $sbi = new SBI();
    $sbi->ATM();
?>