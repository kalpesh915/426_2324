<?php
    require_once("Connection.class.php");

    class Category extends Connection{
        public function addNewCategory($categoryname){
            // code for check category name exist or not
            $sqlQuery = "select * from category where categoryname = '$categoryname'";
            $result = $this->connection->query($sqlQuery);

            if($result->num_rows > 0){
                return false;
            }else{
                $categoryClassName = str_replace(" ", "_" , $categoryname);
                $sqlQuery = "insert into category (categoryname, categoryclassname) values ('$categoryname', '$categoryClassName')";
                $this->connection->query($sqlQuery);

                return true;
            }
        }

        public function getAllCategory(){
            $sqlQuery = "select * from category";
            return $this->connection->query($sqlQuery);
        }

        public function getOneCategory($categoryid){
            $sqlQuery = "select * from category where categoryid = $categoryid";
            return $this->connection->query($sqlQuery);
        }

        public function changeCategoryStatus($categoryid, $status){
            $sqlQuery = "update category set status = $status where categoryid = $categoryid";
            $this->connection->query($sqlQuery);
        }

        public function updateCategory($categoryid, $categoryname){
              // code for check category name exist or not
              $sqlQuery = "select * from category where categoryname = '$categoryname'";
              $result = $this->connection->query($sqlQuery);
  
              if($result->num_rows > 0){
                  return false;
              }else{
                  $categoryClassName = str_replace(" ", "_" , $categoryname);
                  $sqlQuery = "update category set categoryname = '$categoryname', categoryclassname =  '$categoryClassName' where categoryid = $categoryid";
                  //echo $sqlQuery;
                  $this->connection->query($sqlQuery);
  
                  return true;
              }
        }
    }

    $category = new Category();
?>