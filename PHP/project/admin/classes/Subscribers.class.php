<?php
    require_once("Connection.class.php");

    class Subscribers extends Connection{
        public function getAllSubscribers(){
            $sqlQuery = "select * from subscribers";
            return $this->connection->query($sqlQuery);
        }

        public function changeSubscriberStatus($subscriberid, $status){
            $sqlQuery = "update subscribers set status = $status where subscriberid = $subscriberid";
            $this->connection->query($sqlQuery);
        }
    }

    $subscribers = new Subscribers();
?>