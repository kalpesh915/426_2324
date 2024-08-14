<?php
    require_once("Connection.class.php");

    class Images extends Connection{
        public function addNewImage($imagetitle, $imagedescription, $imagepath, $imagetype){
            $sqlQuery = "insert into images (imagetitle, imagedescription, imagepath, imagetype) values ('$imagetitle', '$imagedescription', '$imagepath', '$imagetype')";
            $this->connection->query($sqlQuery);
        }

        public function getOneImage($imageid){
            $sqlQuery = "select * from images where imageid = $imageid";
            return $this->connection->query($sqlQuery);
        }

        public function getAllGalleryImages(){
            $sqlQuery = "select * from images where imagetype = 1";
            return $this->connection->query($sqlQuery);
        }

        public function getAllSliderImages(){
            $sqlQuery = "select * from images where imagetype = 2";
            return $this->connection->query($sqlQuery);
        }

        public function changeImageStatus($imageid, $status){
            $sqlQuery = "update images set status = $status where imageid = $imageid";
            $this->connection->query($sqlQuery);
        }

        public function deleteImage($imageid){
            $sqlQuery = "select imagepath from images where imageid = $imageid";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            unlink($row["imagepath"]); // delete file

            $sqlQuery = "delete from images where imageid = $imageid";
            $this->connection->query($sqlQuery);
        }

        public function updateImage($imageid, $imagetitle, $imagedescription, $imagepath = null, $imagetype){
            if($imagepath !== null){
                $sqlQuery = "select imagepath from images where imageid = $imageid";
                $result = $this->connection->query($sqlQuery);
                $row = $result->fetch_assoc();
                unlink($row["imagepath"]);
            }

            if($imagepath !== null){
                $sqlQuery = "update images set imagetitle = '$imagetitle', imagedescription = '$imagedescription', imagepath = '$imagepath', imagetype = '$imagetype' where imageid = $imageid";
                $this->connection->query($sqlQuery);
            }else{
                $sqlQuery = "update images set imagetitle = '$imagetitle', imagedescription = '$imagedescription', imagetype = '$imagetype' where imageid = $imageid";
                $this->connection->query($sqlQuery);
            }
        }
    }

    $images = new Images();
?>