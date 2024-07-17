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
    }

    $users = new Users();
?>