<?php
    require_once("Connection.class.php");

    class Career extends Connection{
        public function getAllJobApplications(){
            $sqlQuery = "select * from career order by (careerid)";
            return $this->connection->query($sqlQuery);
        }

        public function getOneJobApplication($careerid){
            $sqlQuery = "select * from career where careerid = $careerid";
            return $this->connection->query($sqlQuery);
        }

        public function changeJobApplicationStatus($careerid){
            $sqlQuery = "update career set status = 1 where careerid = $careerid";
            $this->connection->query($sqlQuery);
        }

        public function deleteJobApplication($careerid){
            $sqlQuery = "select resumepath from career where careerid = $careerid";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            extract($row);

            // delete file
            unlink($resumepath);

            $sqlQuery = "delete from career where careerid = $careerid";
            $this->connection->query($sqlQuery);

            if($this->connection->affected_rows > 0){
                return true;
            }else{
                return false;
            }
        }
    }

    $career = new Career();
?>