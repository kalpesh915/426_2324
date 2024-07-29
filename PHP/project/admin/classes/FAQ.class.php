<?php
    require_once("Connection.class.php");
    class FAQ extends Connection{
        public function addNewFAQ($question, $answer){
            $sqlQuery = "insert into faq (question, answer) values ('$question', '$answer')";
            $this->connection->query($sqlQuery);
        }

        public function getAllFAQ(){
            $sqlQuery = "select * from faq";
            return $this->connection->query($sqlQuery);
        }

        public function getOneFAQ($faqid){
            $sqlQuery = "select * from faq where faqid = $faqid";
            return $this->connection->query($sqlQuery);
        }

        public function changeFAQStatus($faqid, $status){
            $sqlQuery = "update faq set status = $status where faqid = $faqid";
            $this->connection->query($sqlQuery);
        }

        public function updateFAQ($faqid, $question, $answer){
            $sqlQuery = "update faq set question = '$question', answer = '$answer' where faqid = $faqid";
            $this->connection->query($sqlQuery);
        }

        public function deleteFAQ($faqid){
            $sqlQuery = "delete from faq where faqid = $faqid";
            $this->connection->query($sqlQuery);
        }
    }

    $faq = new FAQ();
?>