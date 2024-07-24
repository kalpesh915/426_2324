<?php
    require_once("commons/session.php");
    require_once("classes/Social.class.php");

    $result = $social->getSocialDetails();
    $row = $result->fetch_assoc();
    extract($row);
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
                        <h1 class="h3 mb-0 text-gray-800">Manage Social Media Links</h1>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Title</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- Custome code Here -->
                                     <?php 
                                        require_once("commons/sessionprinter.php");
                                     ?>
                                     <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="my-3">
                                            <label for="facebook">Enter Facebook Link</label>
                                            <input type="url" name="facebook" id="facebook" class="form-control" value="<?= $facebook; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="instagram">Enter Instagram Link</label>
                                            <input type="url" name="instagram" id="instagram" class="form-control" value="<?= $instagram; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="linkedin">Enter Linkedin Link</label>
                                            <input type="url" name="linkedin" id="linkedin" class="form-control" value="<?= $linkedin; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="telegram">Enter Telegram Link</label>
                                            <input type="url" name="telegram" id="telegram" class="form-control" value="<?= $telegram; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="snapchat">Enter Snapchat Link</label>
                                            <input type="url" name="snapchat" id="snapchat" class="form-control" value="<?= $snapchat; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="youtube">Enter Youtube Link</label>
                                            <input type="url" name="youtube" id="youtube" class="form-control" value="<?= $youtube; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="whatsapp">Enter Whatsapp Link</label>
                                            <input type="url" name="whatsapp" id="whatsapp" class="form-control" value="<?= $whatsapp; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="twitter">Enter Twitter Link</label>
                                            <input type="url" name="twitter" id="twitter" class="form-control" value="<?= $twitter; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="pinterest">Enter Pinterest Link</label>
                                            <input type="url" name="pinterest" id="pinterest" class="form-control" value="<?= $pinterest; ?>">
                                        </div>

                                        <div class="my-3">
                                            <input type="submit" value="Update Contact" class="btn btn-primary" name="updatePrcocess">
                                            <input type="reset" value="Reset" class="btn
                                             btn-danger">
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

<?php
    if(isset($_POST["updatePrcocess"])){
        $facebook = $social->filterData($_POST["facebook"]);
        $instagram = $social->filterData($_POST["instagram"]);
        $linkedin = $social->filterData($_POST["linkedin"]);
        $telegram = $social->filterData($_POST["telegram"]);
        $snapchat = $social->filterData($_POST["snapchat"]);
        $youtube = $social->filterData($_POST["youtube"]);
        $whatsapp = $social->filterData($_POST["whatsapp"]);
        $twitter = $social->filterData($_POST["twitter"]);
        $pinterest = $social->filterData($_POST["pinterest"]);

        $social->updateSocialMedia($facebook, $instagram, $linkedin, $telegram, $snapchat, $youtube, $whatsapp, $twitter, $pinterest);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <strong>Success : </strong> Social Media Details are Updated
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("location:social");
    }
?>