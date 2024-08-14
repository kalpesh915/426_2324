<?php
require_once("commons/session.php");
require_once("classes/Images.class.php");

// change status code
if (isset($_GET["status"])) {
    $imageid = $images->filterData($_GET["imageid"]);
    $status = $images->filterData($_GET["status"]);

    $images->changeImageStatus($imageid, $status);

    header("location:manageslider");
}

// delete FAQ
if (isset($_GET["delete"])) {
    $imageid = $images->filterData($_GET["imageid"]);

    $images->deleteImage($imageid);

    header("location:manageslider");
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
                        <h1 class="h3 mb-0 text-gray-800">Manage Slider Images</h1>
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
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $result = $images->getAllSliderImages();

                                                while ($row = $result->fetch_assoc()) {
                                                    if ($row["status"] == 1) {
                                                        $statusbtn = "<a href='manageslider?imageid=$row[imageid]&status=0' class='btn btn-danger'>Disable</a>";
                                                    } else {
                                                        $statusbtn = "<a href='manageslider?imageid=$row[imageid]&status=1' class='btn btn-success'>Enable</a>";
                                                    }

                                                    echo "<tr>
                                                            <td>$row[imagetitle]</td>
                                                            <td><img src='$row[imagepath]' class='w-50'></td>
                                                            <td>$statusbtn</td>
                                                            <td>
                                                                <button class='btn btn-danger' type='button' onclick='confirmDelete($row[imageid])'>Delete</button>
                                                            </td>
                                                            <td>
                                                                <a href='editimage?imageid=$row[imageid]' class='btn btn-secondary'>Edit</a>
                                                            </td>
                                                        </tr>";
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
    function confirmDelete(imageid){
        if(confirm("Are you sure to delete this Image ???")){
            window.location.href = "manageslider?delete=true&imageid="+imageid;
        }
    }
</script>