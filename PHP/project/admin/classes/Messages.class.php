<?php 
    require_once("Connection.class.php");

    class Messages extends Connection{
        public function getNewMessages(){
            $sqlQuery = "select * from messages where status = 0";
            return $this->connection->query($sqlQuery);
        }

        public function getAllMessages(){
            $sqlQuery = "select * from messages";
            return $this->connection->query($sqlQuery);
        }

        public function getOneMessage($messageid){
            $sqlQuery = "select * from messages where messageid = $messageid";
            return $this->connection->query($sqlQuery);
        }

        public function deleteMessage($messageid){
            $sqlQuery = "delete from messages where messageid = $messageid";
            return $this->connection->query($sqlQuery);
        }

        public function markasRead($messageid){
            $sqlQuery = "update messages set status = 1 where messageid = $messageid";
            return $this->connection->query($sqlQuery);
        }
    }

    $messages = new Messages();
?>