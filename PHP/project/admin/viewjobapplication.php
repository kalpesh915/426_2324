<?php
    require_once("commons/session.php");
    require_once("classes/Career.class.php");

    if(isset($_GET["delete"])){
        $careerid = $career->filterData($_GET["careerid"]);

        if($career->deleteJobApplication($careerid)){
            header("location:career");
        }
    }

    if(isset($_GET["careerid"])){
        $careerid = $career->filterData($_GET["careerid"]);

        $result = $career->getOneJobApplication($careerid);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $career->changeJobApplicationStatus($careerid);
            extract($row);
        }else{
            header("location:career");    
        }
    }else{
        header("location:career");
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
                        <h1 class="h3 mb-0 text-gray-800">Page Title</h1>
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
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete(<?=$careerid?>)">Delete</button>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- Custome code Here -->
                                     <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <tr>
                                                <th>Candidte Name</th>
                                                <td><?= $candidatename; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td><?= $candidatephone; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?= $candidateemail; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Qualification</th>
                                                <td><?= $qualification; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Experience</th>
                                                <td><?= $experience; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td><?= $gender; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td><?= $dateofbirth; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td><?= $candidateaddress; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                <object data="<?= $resumepath ?>" height="700" class="w-100"></object> 
                                                </th>
                                            </tr>
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
</body>

</html>

<script>
    function confirmDelete(careerid){
        //alert(careerid);
        if(confirm("Are you sure to delete this job Application ?")){
            window.location.href = "viewjobapplication?delete=1&careerid="+careerid;
        }
    }
</script>