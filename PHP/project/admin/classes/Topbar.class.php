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
    }

    $topbar = new Topbar();
?>