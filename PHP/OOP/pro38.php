<?php
    namespace HTMLCode;
    class Table{
        public function __construct(){
            echo "<hr> HTML Table Code";
        }
    }


    namespace Furniture;
    class Table{
        public function __construct(){
            echo "<hr> Furniture Table Code";
        }
    }

    use HTMLCode\Table as T;
    $obj1 = new T();
?>