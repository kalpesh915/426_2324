<?php
    session_start();
    ob_start();
    date_default_timezone_set("Asia/Kolkata");

    if(isset($_SESSION["adminsession"])){
        $adminemail = $_SESSION["adminsession"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <strong>Error : </strong> Please Login Firts
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("location:index");
    }
?>