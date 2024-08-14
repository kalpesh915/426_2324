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

        public function getProductCount(){
            $sqlQuery = "select count(productid) from products";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(productid)"];
        }

        public function getCategoryCount(){
            $sqlQuery = "select count(categoryid) from category";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(categoryid)"];
        }

        public function getServiceCount(){
            $sqlQuery = "select count(serviceid) from services";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(serviceid)"];
        }

        public function getFaqCount(){
            $sqlQuery = "select count(faqid) from faq";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(faqid)"];
        }

        public function getCareerCount(){
            $sqlQuery = "select count(careerid) from career";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(careerid)"];
        }

        public function getImageCount(){
            $sqlQuery = "select count(imageid) from images";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(imageid)"];
        }

        public function getTeamCount(){
            $sqlQuery = "select count(teamid) from team";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(teamid)"];
        }

        public function getSubscriberCount(){
            $sqlQuery = "select count(subscriberid) from subscribers";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            return $row["count(subscriberid)"];
        }

        public function getBackupCount(){
            $myfiles = scandir("dbbackups/");
            return count($myfiles) - 2;
        }
    }

    $topbar = new Topbar();
?>