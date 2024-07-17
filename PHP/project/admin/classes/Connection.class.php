<?php 
    // code for database connection

    class Connection {
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "426project";

        public $connection = null;

        public function __construct(){
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->connection->connect_error){
                die("<hr> Connection Failed due to ".$this->connection->connect_error);
            }
        }

        public function filterData($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function logWriter($email, $event){
            $sqlquery = "insert into logs (email, event) values ('$email', '$event')";
            $this->connection->query($sqlquery);
        }
    }
?>