<?php
    trait Math1{
        public function Sum($ip1, $ip2){
            echo "<hr> Sum is : ".($ip1 + $ip2);
        }

        public function Sub($ip1, $ip2){
            echo "<hr> Sub is : ".($ip1 - $ip2);
        }
    }

    trait Math2{
        public function Div($ip1, $ip2){
            echo "<hr> Sum is : ".($ip1 / $ip2);
        }

        public function Mul($ip1, $ip2){
            echo "<hr> Mul is : ".($ip1 * $ip2);
        }
    }

    class Calculation{
        use Math1, Math2;
    }

    $calculation = new Calculation();

    $calculation->sum(111, 22);
    $calculation->sub(111, 22);
    $calculation->mul(111, 22);
    $calculation->div(111, 22);
?>