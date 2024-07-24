<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        public function adminLogin($adminemail, $adminpassword){
            $sqlQuery = "select * from adminusers where email = '$adminemail' and password = '$adminpassword'";

            //echo $sqlQuery;
            $result = $this->connection->query($sqlQuery);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function getProfile($adminemail){
            $sqlQuery = "select fname, lname from adminusers where email = '$adminemail'";
            $result = $this->connection->query($sqlQuery);
            return $result->fetch_assoc();
        }

        public function updateProfile($adminemail, $fname, $lname){
            $sqlQuery = "update adminusers set fname = '$fname', lname = '$lname' where email = '$adminemail'";
            $this->connection->query($sqlQuery);
        }

        public function updatePassword($adminemail, $newpassword){
            $sqlQuery = "update adminusers set password = '$newpassword' where email = '$adminemail' ";
            $this->connection->query($sqlQuery);
        }

        public function getLogs(){
            $sqlQuery = "update logs set status = 1 where status = 0";
            $this->connection->query($sqlQuery);

            $sqlQuery = "select * from logs";
            return $this->connection->query($sqlQuery);
        }

        public function deleteLogs($deleteType){
            if($deleteType == 1){
                $sqlQuery = "delete from logs where event like '%log%'";
                $this->connection->query($sqlQuery);
            }else if($deleteType == 2){
                $sqlQuery = "delete from logs";   
                $this->connection->query($sqlQuery);
            }
        }
    }

    $users = new Users();
?>