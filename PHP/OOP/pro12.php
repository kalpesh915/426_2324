<?php
    class Math1{
        public function sum($ip1, $ip2){
            echo "<hr> Sum is ".($ip1 + $ip2);
        }

        public function sub($ip1, $ip2){
            echo "<hr> Sub is ".($ip1 - $ip2);
        }
    }

    class Math2 extends Math1{
        public function div($ip1, $ip2){
            echo "<hr> Div is ".($ip1 / $ip2);
        }

        public function mul($ip1, $ip2){
            echo "<hr> Mul is ".($ip1 * $ip2);
        }
    }

    class Math3 extends Math2{
        public function mod($ip1, $ip2){
            echo "<hr> Mod is ".($ip1 % $ip2);
        }
    }

    $math3 = new Math3();

    $math3->sum(111, 22);
    $math3->sub(111, 22);
    $math3->mul(111, 22);
    $math3->div(111, 22);
    $math3->mod(111, 22);
?>