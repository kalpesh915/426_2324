<?php
    require_once("Connection.class.php");

    class Student extends Connection{
        public function addNewStudent($fname, $lname, $city, $email, $phone, $gender ){
            $sqlQuery = "insert into students (fname, lname, city, email, phone, gender) values ('$fname', '$lname', '$city', '$email', '$phone', '$gender')";

            if($this->connection->query($sqlQuery) === true){
                return true;
            }else{
                return false;
            }
        }

        public function getAllStudents(){
            $sqlQuery = "select * from students";
            return $this->connection->query($sqlQuery);
        }

        public function getStudentById($id){
            $sqlQuery = "select * from students where id = $id";
            return $this->connection->query($sqlQuery);
        }

        public function deleteStudent($id){
            $sqlQuery = "delete from students where id = $id";
            $this->connection->query($sqlQuery);

            if($this->connection->affected_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function updateStudent($id, $fname, $lname, $city, $email, $phone, $gender ){
            $sqlQuery = "update students set fname = '$fname', lname = '$lname', city = '$city', email = '$email', phone = '$phone', gender = '$gender' where id = $id";

            $this->connection->query($sqlQuery);

            if($this->connection->affected_rows > 0){
                return true;
            }else{
                return false;
            }
        }

    }

    $student = new Student();
?>