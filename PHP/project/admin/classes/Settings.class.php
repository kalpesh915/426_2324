<?php
    require_once("Connection.class.php");

    class Settings extends Connection{
        public function getSettings(){
            $sqlQuery = "select * from settings where settingid = 1";
            return $this->connection->query($sqlQuery);
        }

        public function updateSettings($googletranslate, $careeroption){
            $sqlQuery = "update settings set googletranslate = '$googletranslate', careeroption = '$careeroption' where settingid = 1";
            $this->connection->query($sqlQuery);
        }
    }

    $settings = new Settings();
?>