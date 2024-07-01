<?php
    class Fruits{
        // property
        public $name, $color, $weight, $price;

        // method

        public function __construct($name, $color, $weight, $price){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
            $this->price = $price;

            $this->getData();
        }

        public function getData(){
            echo "<hr>Fruit Name is {$this->name} color is {$this->color} weight {$this->weight} and price is {$this->price}";
        }

        public function __destruct(){
            echo "<hr>Object Deleted";
        }
    }

    $fruit1 = new Fruits("Kiwi", "Green", "85Gms", "10Rs");
 ?>