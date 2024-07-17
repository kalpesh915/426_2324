<?php 
    session_start();
    ob_start();

    if(isset($_SESSION["adminsession"])){
        unset($_SESSION["adminsession"]);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <strong>Success : </strong> Logout Successfully
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <strong>Error : </strong> Invalid attempt of Logout
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
    }
    header("location:index");
?>