<?php
    abstract class RBI{
        public function __construct(){
            echo "<hr> Constructor of RBI";
        }
        
        abstract protected function ATM();

        public function drinkingWater(){
            echo "<hr> Available in all Branches";
        }
    }

    class SBI extends RBI{
        public function ATM(){
            echo "<hr> SBI Provide ATM Card";
        }
    }

    $sbi = new SBI();
    $sbi->ATM();
    $sbi->drinkingWater();
?>