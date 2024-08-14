<?php
    session_start();
    ob_start();

    require_once("classes/Reset.class.php");
    date_default_timezone_set("Asia/Kolkata");

    // import required files for sending email
    // Import PHPMailer classes into the global namespace 
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\SMTP; 
    use PHPMailer\PHPMailer\Exception; 
 
    // Include library files 
    require 'PHPMailer/Exception.php'; 
    require 'PHPMailer/PHPMailer.php'; 
    require 'PHPMailer/SMTP.php'; 

    if(isset($_SESSION["validateuser"])){
        unset($_SESSION["validateuser"]);
    }
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a <b>OTP</b> to reset your password!</p>
                                    </div>
                                    <div>
                                        <?php
                                            require_once("commons/sessionprinter.php");
                                        ?>
                                    </div>
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                id="exampleInputEmail" name="emailaddress" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." required>
                                        </div>
                                        <input type="submit" name="resetProcess" class="btn btn-primary" value="Reset Password">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index">Already have an account? Login!</a>
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

<?php
    if(isset($_POST["resetProcess"])){
        $emailaddress = $reset->filterData($_POST["emailaddress"]);

        $result = $reset->checkEmailAddress($emailaddress);

        if($result){
            $otp = rand(99999, 999999);
            echo $otp;

            $_SESSION["emailaddress"] = $emailaddress;

            $result = $reset->readSMTPConfig();
            $row = $result->fetch_assoc();
            extract($row);

            $content = "Hello User $emailaddress Your Password Reset OTP is $otp";
            echo $content;

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = $smtphostname;
            $mail->Username = $smtpusername;
            $mail->Password = $smtppassword;
            $mail->SMTPSecure = $smtpsecure;
            $mail->Port = $smtpport;

            $mail->setFrom("$smtpusername", "Project Admin");
            $mail->isHTML(true);

            $mail->addAddress($emailaddress);
            $mail->Subject = "Password Reset OTP";
            $mail->Body = $content;

            if($mail->send()){
                $_SESSION["validateuser"] = $emailaddress;

                // calculate exriry time
                $currentTime = time();
                $expiryTime = strtotime("+$otptimelimit minute", $currentTime);

                $reset->resetPasswordOTP($emailaddress, $otp, date("Y-m-d H:i:s",$expiryTime));
                $reset->logWriter($emailaddress, "Password Reset OTP $otp send on your email address");

                header("location:enterotp");
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <strong>Error : </strong> Unable to send OTP Email on $emailaddress .
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button></div>";
                header("location:forgotpassword");    
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <strong>Error : </strong> $emailaddress is not Registered with us.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
            header("location:forgotpassword");
        }
    }
?>