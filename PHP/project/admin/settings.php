<?php
    require_once("commons/session.php");
    require_once("classes/Settings.class.php");

    $result = $settings->getSettings();
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
                        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
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
                                     <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                        <div class="my-3">
                                            <label for="googletranslate">Select Status of Google Translate</label>
                                            <select name="googletranslate" id="googletranslate" class="form-control" required>
                                                <option value="1" <?= $googletranslate == "1" ? "selected" : "" ?>>Enable</option>
                                                <option value="0" <?= $googletranslate == "0" ? "selected" : "" ?>>Disable</option>
                                            </select>
                                        </div>
                                        <div class="my-3">
                                            <label for="careeroption">Select Career Option to </label>
                                            <select name="careeroption" id="careeroption" class="form-control" required>
                                                <option value="1" <?= $careeroption == "1" ? "selected" : "" ?>>Enable</option>
                                                <option value="0" <?= $careeroption == "0" ? "selected" : "" ?>>Disable</option>
                                            </select>
                                        </div>

                                        <div class="my-3">
                                            <input type="submit" value="Update Settings" class="btn btn-primary" name="updateProcess">
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

<!-- code for update settings -->
 <?php
    if(isset($_POST["updateProcess"])){
        $googletranslate = $settings->filterData($_POST["googletranslate"]);
        $careeroption = $settings->filterData($_POST["careeroption"]);

        $settings->updateSettings($googletranslate, $careeroption);
        $settings->logWriter($adminemail, "Settings are Updated to Google Translate to $googletranslate and Career Option to $careeroption");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <strong>Success : </strong> Settings are Updated
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("location:settings");
    }
 ?>