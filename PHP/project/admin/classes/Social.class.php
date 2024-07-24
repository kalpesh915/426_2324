<?php
    
    require_once("Connection.class.php");

    class Social extends Connection{
        public function getSocialDetails(){
            $sqlQuery = "select * from socialmedia where socialmediaid = 1";
            return $this->connection->query($sqlQuery);
        }

        public function updateSocialMedia($facebook,  $instagram, $linkedin, $telegram, $snapchat, $youtube, $whatsapp, $twitter, $pinterest){
            $sqlQuery = "update socialmedia set facebook = '$facebook', instagram = '$instagram', linkedin = '$linkedin', telegram = '$telegram', snapchat = '$snapchat', youtube = '$youtube', whatsapp = '$whatsapp', twitter = '$twitter', pinterest = '$pinterest' where socialmediaid = 1";
            $this->connection->query($sqlQuery);
        }
    }

    $social = new Social();
?>