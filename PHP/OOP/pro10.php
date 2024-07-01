<?php
    class Example{
        public $ip1;
        protected $ip2;
        private $ip3;
    }
    
    $example = new Example();

    $example->ip1 = 10;
    $example->ip2 = 10;
    $example->ip3 = 10;

    /*
        access      same class      child class     object
        private     yes             no              no
        protected   yes             yes             no
        public      yes             yes             yes
    */ 
?>