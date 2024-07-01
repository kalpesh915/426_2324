<?php
    class Fruits{
        // property
        public $name, $color, $weight, $price;

        // method
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
    $fruit1->setData("Banana", "Yellow", "120Gms", "50Rs");
    $fruit1->getData();

    echo "<hr> Instance of ";var_dump($fruit1 instanceof Fruits);
?>