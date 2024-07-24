<?php
    require_once("Connection.class.php");

    class SEO extends Connection{
        public function getSEO(){
            $sqlQuery = "select * from seo where seoid = 1";
            return $this->connection->query($sqlQuery);
        }

        public function updateSEO($metakeywords, $metadescription, $googletagid){
            $sqlQuery = "update seo set metakeywords = '$metakeywords', metadescription = '$metadescription', googletagid = '$googletagid' where seoid = 1";
            $this->connection->query($sqlQuery);
        }
    }

    $seo = new SEO();
?>