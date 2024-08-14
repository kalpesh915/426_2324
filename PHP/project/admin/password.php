<?php
    require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php require_once("commons/title.php"); ?>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        require_once("commons/sidebar.php");
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require_once("commons/topbar.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
                        <button type="button" class="btn btn-primary" onclick="history.back()">
                            <i class="fas fa-arrow-left mx-2"></i>Back</a>
                    </div>

                    <?php // require_once("commons/datacount.php"); 
                    ?>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php require_once("commons/sessionprinter.php"); ?>
                                    <!-- Custome code Here -->
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="my-3">
                                            <label class="form-label" for="cpass">Enter Current Password </label>
                                            <input type="password" name="cpass" id="cpass" required class="form-control">
                                        </div>
                                        <div class="my-3">
                                            <label class="form-label" for="npass">Enter New Password </label>
                                            <input type="password" name="npass" id="npass" required class="form-control">
                                        </div>
                                        <div class="my-3">
                                            <label class="form-label" for="cnpass">Enter Confirm Password </label>
                                            <input type="password" name="cnpass" id="cnpass" required class="form-control">
                                        </div>
                                        <div class="my-3">
                                            <input type="submit" value="Change Now" class="btn btn-primary" name="changeProcess">
                                            <input type="reset" value="Reset" class="btn btn-danger">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php require_once("commons/footer.php"); ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>

<!-- Code for change password -->

<?php 
    if(isset($_POST["changeProcess"])){
        require_once("classes/Users.class.php");

        $cpass = $users->filterData($_POST["cpass"]);
        $npass = $users->filterData($_POST["npass"]);
        $cnpass = $users->filterData($_POST["cnpass"]);

        if($npass == $cnpass){
            // check for current password
            $cpass = sha1($cpass);
            if($users->adminLogin($adminemail, $cpass)){
                $npass = sha1($npass);
                $users->updatePassword($adminemail, $npass);

                $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <strong>Success : </strong> Password updated Successfully
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button></div>";

                $users->logWriter($adminemail, "Password Changes Successfully");
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <strong>Error : </strong> Current Password does not match
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>         <span aria-hidden='true'>&times;</span></button></div>";        
                $users->logWriter($adminemail, "Invalid Attempt of Password Changes");        
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <strong>Error : </strong> Confirm Password does not match
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>            <span aria-hidden='true'>&times;</span></button></div>";            
        }

        header("location:password.php");
    }
?>