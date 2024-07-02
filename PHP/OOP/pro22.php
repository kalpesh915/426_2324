<?php
    abstract class RBI{
        abstract public function ATM();
    }

    class SBI extends RBI{
        protected function ATM(){
            echo "<hr> SBI Provide ATM Card";
        }
    }

    $sbi = new SBI();
    $sbi->ATM();
?>