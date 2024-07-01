<?php
    class Fruits{
        // property
        public $name, $color, $weight, $price;

        // method
        public function setData(){
            $this->name = "Mango";
            $this->color = "Kesri";
            $this->weight = "1Kg";
            $this->price = "150Rs";
        }

        public function getData(){
            echo "Fruit Name is {$this->name} color is {$this->color} weight {$this->weight} and price is {$this->price}";
        }
    }

    $fruit1 = new Fruits();
    $fruit1->setData();
    $fruit1->getData();
?>