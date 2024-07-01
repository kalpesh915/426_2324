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

    $math2 = new Math2();

    $math2->sum(111, 22);
    $math2->sub(111, 22);
    $math2->mul(111, 22);
    $math2->div(111, 22);

?>