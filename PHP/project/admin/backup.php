<?php

use Ifsnop\Mysqldump\Mysqldump;

require_once("commons/session.php");

if(isset($_GET["delete"])){
    $file = $_GET["file"];
    unlink("dbbackups/$file"); // delete file
    header("location:backup");
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">Database Backup</h1>
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
                                    <!-- Custome code Here -->
                                    <?php
                                    require_once("commons/sessionprinter.php");
                                    ?>
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="d-flex">
                                            <input type="submit" value="Get Database Backup" class="btn btn-primary btn-block" name="backupProcess">
                                        </div>
                                    </form>

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>File Name</th>
                                                    <th>Download</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>File Name</th>
                                                    <th>Download</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php
                                                    // code for scan backup folder
                                                    $myfiles = scandir("dbbackups/");
                                                    //print_r($myfiles);
                                                    $count = count($myfiles);

                                                    for($i=2; $i< $count; $i++){
                                                        echo "<tr>
                                                            <td>$myfiles[$i]</td>
                                                            <td><a href='dbbackups/$myfiles[$i]' class='btn btn-primary' download='Backup of Sql $myfiles[$i]'>Download</td>
                                                            <td><button class='btn btn-danger' type='button' onclick=confirmDelete('$myfiles[$i]')>Delete</button></td>
                                                        <tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
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
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>

<script>
    function confirmDelete(filepath){
        //alert(filepath);
        if(confirm("Are you sure to delete this file "+filepath+" ???")){
            window.location.assign("backup?delete=1&file="+filepath);
        }
    }
</script>

<?php
if (isset($_POST["backupProcess"])) {
    echo "ok";
    require_once("Mysqldump/Mysqldump.php");
    $connectionDetails = $topbar->getConnectionDetail();
    $dumpObject = new Mysqldump("mysql:host={$connectionDetails['hostname']};dbname={$connectionDetails['database']}", $connectionDetails['username'], $connectionDetails['password']);

    $filename = "dbbackups/database_backup_on_" . date("dmY-His") . ".sql";

    $dumpObject->start($filename);

    $topbar->logWriter($adminemail, "Database Backup Saved as $filename");
    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <strong>Success : </strong> Database Backup Completed File is $filename
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
    header("location:backup");
}
?>