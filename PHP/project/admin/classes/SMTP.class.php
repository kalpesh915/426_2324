<?php
    require_once("Connection.class.php");
    
    class SMTP extends Connection{
        public function getSMTPConfig(){
            $sqlQuery = "select * from smtpconfig where configid = 1";
            return $this->connection->query($sqlQuery);
        }

        public function updateSMTPConfig($smtphostname, $smtpusername, $smtppassword, $smtpsecure, $smtpport, $otptimelimit){
            $sqlQuery = "update smtpconfig set smtphostname = '$smtphostname', smtpusername = '$smtpusername', smtppassword = '$smtppassword', smtpsecure = '$smtpsecure', smtpport = '$smtpport', otptimelimit = '$otptimelimit' where configid = 1";
            $this->connection->query($sqlQuery);
        }
    }

    $smtp = new SMTP();
?>