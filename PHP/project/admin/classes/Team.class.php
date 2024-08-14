<?php
    require_once("Connection.class.php");

    class Team extends Connection{
        public function addNewTeamMember($membername, $designation, $expericence, $jobdescription, $memberphoto, $teamfacebook="", $teamtwitter="", $teaminstagram="", $teamlinkedin ="", $teamemail="", $teamphone=""){
            $sqlQuery = "insert into team (membername, designation, experience, jobdescription, memberphoto, teamfacebook, teamtwitter, teaminstagram, teamlinkedin, teamemail, teamphone) values ('$membername', '$designation', '$expericence', '$jobdescription', '$memberphoto', '$teamfacebook', '$teamtwitter', '$teaminstagram', '$teamlinkedin', '$teamemail', '$teamphone')";

            $this->connection->query($sqlQuery);
        }

        public function getAllTeamMembers(){
            $sqlQuery = "select * from team";
            return $this->connection->query($sqlQuery);
        }

        public function getOneTeamMember($teamid){
            $sqlQuery = "select * from team where teamid = $teamid";
            return $this->connection->query($sqlQuery);
        }

        public function updateTeamMemberStatus($teamid, $status){
            $sqlQuery = "update team set status = $status where teamid = $teamid";
            $this->connection->query($sqlQuery);
        }

        public function deleteMember($teamid){
            $sqlQuery = "select memberphoto from team where teamid = $teamid";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_assoc();
            unlink($row["memberphoto"]);

            $sqlQuery = "delete from team where teamid = $teamid";
            $this->connection->query($sqlQuery);
        }

        public function updateTeamMember($teamid, $membername, $designation, $expericence, $jobdescription, $memberphoto = "", $teamfacebook="", $teamtwitter="", $teaminstagram="", $teamlinkedin ="", $teamemail="", $teamphone=""){
            if($memberphoto != ""){
                $sqlQuery = "select memberphoto from team where teamid = $teamid";
                $result = $this->connection->query($sqlQuery);
                $row = $result->fetch_assoc();
                unlink($row["memberphoto"]);
                
                $sqlQuery = "update team set memberphoto = '$memberphoto' where teamid = $teamid";
                $this->connection->query($sqlQuery);
            }

            $sqlQuery = "update team set membername = '$membername', designation = '$designation', experience = '$expericence', jobdescription = '$jobdescription', teamfacebook = '$teamfacebook', teamtwitter = '$teamtwitter', teaminstagram = '$teaminstagram', teamlinkedin = '$teamlinkedin', teamemail = '$teamemail', teamphone = '$teamphone' where teamid = $teamid";
            $this->connection->query($sqlQuery);
        }
    }

    $team = new Team();
?>