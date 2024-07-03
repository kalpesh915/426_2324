<?php
    class MyIterator implements Iterator {
        private $students = [];
        private $pointer = 0;

        public function __construct($students){
            $this->students = $students;
        }

        public function current(): mixed{
            return $this->students[$this->pointer];
        }

        public function next(): void{
            $this->pointer++;
        }

        public function key(): mixed{
            return $this->pointer;
        }

        public function rewind(): void{
            $this->pointer = 0;
        }

        public function valid(): bool{
            return $this->pointer < count($this->students);
        }
    }

    function printer(Iterator $students){
        foreach($students as $student){
            echo "<hr> Welcome {$student}";
        }
    }

    $studentsList = new MyIterator(["Smit", "Priyajitsinh", "Aryan", "Zeel", "Hemal", "Hensi", "Dhruvisha", "Devangi"]);

    printer($studentsList);
?>