<?php
    interface RBI{
        public function deposit();
        public function wirthdrwal();
        public function ATM();
        public function cheque();
    }

    class HDFC implements RBI{
        public function deposit(){
            echo "<hr> HDFC Allow Deposit";
        }

        public function wirthdrwal(){
            echo "<hr> HDFC Allow Withdrawal";
        }

        public function ATM(){
            echo "<hr> HDFC Allow ATM";
        }

        public function cheque(){
            echo "<hr> HDFC Allow Cheque";
        }
    }


    class AXIS implements RBI{
        public function deposit(){
            echo "<hr> Axis Allow Deposit";
        }

        public function wirthdrwal(){
            echo "<hr> Axis Allow Withdrawal";
        }

        public function ATM(){
            echo "<hr> Axis Allow ATM";
        }

        public function cheque(){
            echo "<hr> Axis Allow Cheque";
        }
    }

    $hdfc = new HDFC();

    $hdfc->deposit();
?>