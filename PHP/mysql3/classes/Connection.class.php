<?php
/*
        this file contails all the common code related to database connection
    */

class Connection
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "426example";

    public $connection = null;

    public function __construct()
    {
        try {
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->connection->connect_error){
                throw new Exception($this->connection->connect_error);
            }
        } catch (Exception $err) {
            echo "<hr> Error while Connecting Database Server : " . $this->connection->connect_error;
        }
    }

    public function filterData($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
}
