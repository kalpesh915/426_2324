<?php
    class Fruits{
        // property
        public $name, $color, $weight, $price;

        // method

        public function __construct(){
            echo "<hr>Constructor of Class is Called";
        }

        public function setData($name, $color, $weight, $price){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
            $this->price = $price;
        }

        public function getData(){
            echo "<hr>Fruit Name is {$this->name} color is {$this->color} weight {$this->weight} and price is {$this->price}";
        }
    }

    $fruit1 = new Fruits();
    $fruit2 = new Fruits();
    $fruit3 = new Fruits();
    $fruit4 = new Fruits();
    $fruit5 = new Fruits();
?>