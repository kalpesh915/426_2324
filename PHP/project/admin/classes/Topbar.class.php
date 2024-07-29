<?php 
    require_once("Connection.class.php");

    class Topbar extends Connection{
        public function countNewNotifications(){
            $sqlQuery = "select count(id) from logs where status = 0";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(id)"];
        }

        public function getSomeNewNotifications($limit){
            $sqlQuery = "select * from logs where status = 0 order by (id) desc limit $limit";
            return $this->connection->query($sqlQuery);
        }

        public function getUnreadMessagesCount(){
            $sqlQuery = "select count(messageid) from messages where status = 0";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(messageid)"];
        }

        public function getSomeNewMessages($limit){
            $sqlQuery = "select * from messages where status = 0 order by (messageid) desc limit $limit";
            return $this->connection->query($sqlQuery);
        }
    }

    $topbar = new Topbar();
?>