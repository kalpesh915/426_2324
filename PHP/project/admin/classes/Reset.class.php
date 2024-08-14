<?php 
    require_once("Connection.class.php");
    class Reset extends Connection{
        public function checkEmailAddress($emailaddress){
            $sqlQuery = "select * from adminusers where email = '$emailaddress'";
            $result = $this->connection->query($sqlQuery);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function readSMTPConfig(){
            $sqlQuery = "select * from smtpconfig where configid = 1";
            return $this->connection->query($sqlQuery);
        }

        public function resetPasswordOTP($emailaddress, $opt, $expiry){
            // code for delete old otp
            $sqlQuery = "delete from passwordresetotp where emailaddress = '$emailaddress'";
            $this->connection->query($sqlQuery);

            $sqlQuery = "insert into passwordresetotp (emailaddress, otptext, expiry_at) values ('$emailaddress', '$opt', '$expiry')";

            $this->connection->query($sqlQuery);
        }

        public function validateOTP($resetemail, $otptext){
            // check for valid email and otp
            $sqlQuery = "select * from passwordresetotp where emailaddress = '$resetemail' and otptext = '$otptext' and status = 0";

            $result = $this->connection->query($sqlQuery);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if(strtotime($row["expiry_at"]) > time()){
                        $sqlQuery = "update passwordresetotp set status = 1 where emailaddress = '$resetemail'";
                        $this->connection->query($sqlQuery);
                        return true;
                    }else{
                        return false;
                    }
                }
            }else{
                return false;
            }
        }

        public function changePassword($email, $npass){
            $sqlQuery = "update adminusers set password = '$npass' where email = '$email'";
            $this->connection->query($sqlQuery);
        }
    }

    $reset = new Reset();
?>