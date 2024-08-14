<?php 
    session_start();
    ob_start();
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

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control " id="exampleInputEmail" placeholder="Enter Email Address..." required name="adminemail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required name="adminpassword">
                                        </div>
                                        
                                        <input type="submit" value="Login"class="btn btn-primary" name="loginProcess">
                                        <input type="reset" value="Reset" class="btn btn-danger">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="forgotpassword">Forgot Password</a>
                                    </div>
                                    <div>
                                        
                                       <?php 
                                            require_once("commons/sessionprinter.php");
                                       ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>

<!-- code for admin login -->

<?php 
    if(isset($_POST["loginProcess"])){
        require_once("classes/Users.class.php");

        $adminemail = $users->filterData($_POST["adminemail"]);   
        $adminpassword = sha1($users->filterData($_POST["adminpassword"]));   

        //echo "$adminemail $adminpassword";
        if($users->adminLogin($adminemail, $adminpassword)){
            $users->logWriter($adminemail, "Login Successfully");
            $_SESSION["adminsession"] = $adminemail;
            header("location:home");
        }else{
            $users->logWriter($adminemail, "Invalid Login Attempt");
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <strong>Error : </strong> Invalid Username or Password
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
            header("location:index");
        }
    }
?>