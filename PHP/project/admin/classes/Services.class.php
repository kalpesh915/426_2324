<?php
    require_once("Connection.class.php");

    class Services extends Connection{
        public function addNewService($servicetitle, $servicedescription, $serviceicon){
            $sqlQuery = "insert into services (servicetitle, servicedescription, serviceicon ) values ('$servicetitle', '$servicedescription', '$serviceicon')";
            $this->connection->query($sqlQuery);
        }

        public function getAllServices(){
            $sqlQuery = "select * from services";
            return $this->connection->query($sqlQuery);
        }

        public function getOneService($serviceid){
            $sqlQuery = "select * from services where serviceid = $serviceid";
            return $this->connection->query($sqlQuery);
        }

        public function changeServiceStatus($serviceid, $status){
            $sqlQuery = "update services set status = $status where serviceid = $serviceid";
            return $this->connection->query($sqlQuery);
        }

        public function deleteService($serviceid){
            $sqlQuery = "delete from services where serviceid = $serviceid";
            return $this->connection->query($sqlQuery);
        }

        public function updateService($serviceid, $servicetitle, $servicedescription, $serviceicon){
            $sqlQuery = "update services set servicetitle = '$servicetitle', servicedescription = '$servicedescription', serviceicon = '$serviceicon' where serviceid = $serviceid";
            return $this->connection->query($sqlQuery);
        }
    }

    $services = new Services();
?>