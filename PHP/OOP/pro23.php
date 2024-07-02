<?php
    abstract class RBI{
        abstract protected function ATM();
    }

    class SBI extends RBI{
        public function ATM(){
            echo "<hr> SBI Provide ATM Card";
        }
    }

    $sbi = new SBI();
    $sbi->ATM();
?>