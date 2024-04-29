<?php
/*  
    Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:
*/

    class Student{
        public $fname, $lname, $city;
        
        public function __construct(){
            $this->fname = "Johny";
            $this->lname = "Bravo";
            $this->city = "Ahamdabad";
        }
    }

    $obj1 = new Student();

    $array1 = (array) $obj1;

    var_dump($array1);
?>
