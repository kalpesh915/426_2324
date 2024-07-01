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

    $fruit2 = new Fruits();
    $fruit2->setData("Kiwi", "Green", "85Gms", "15Rs");
    $fruit2->getData();

    $fruit3 = new Fruits();
    $fruit3->setData("Orange", "Green", "85Gms", "50Rs");
    $fruit3->getData();
?>