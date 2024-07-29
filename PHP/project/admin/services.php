<?php
require_once("commons/session.php");
require_once("classes/Services.class.php");

// change status code
if(isset($_GET["status"])){
    $serviceid = $services->filterData($_GET["serviceid"]);
    $status = $services->filterData($_GET["status"]);

    $services->changeServiceStatus($serviceid, $status);

    header("location:services");
}

// delete FAQ
if(isset($_GET["delete"])){
    $serviceid = $services->filterData($_GET["serviceid"]);
    
    $services->deleteService($serviceid);

    header("location:services");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <h1 class="h3 mb-0 text-gray-800">Services</h1>
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
                                    <button data-toggle="collapse" data-target="#addFAQ" class="btn btn-primary" type="button">Add New</button>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- Custome code Here -->
                                    <?php
                                    require_once("commons/sessionprinter.php");
                                    ?>
                                    <div id="addFAQ" class="collapse">
                                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                            <div class="my-3">
                                                <label class="form-label" for="servicetitle">Enter Service Title</label>
                                                <input type="text" class="form-control"  name="servicetitle" id="servicetitle" required>
                                            </div>

                                            <div class="my-3">
                                                <label class="form-label" for="servicedescription">Enter Service Description</label>
                                                <textarea class="form-control" name="servicedescription" id="servicedescription" required></textarea>
                                            </div>

                                            <div class="my-3">
                                                <label class="form-label" for="serviceicon">Enter Service Icon</label>
                                                <input type="text" class="form-control"  name="serviceicon" id="serviceicon" required>
                                            </div>

                                            <div class="my-3">
                                                <input type="submit" value="Add New Service" class="btn btn-primary" name="addProcess">
                                                <input type="reset" class="btn btn-danger" value="Reset">
                                                <a href="https://fontawesome.com/search?m=free&o=r" class="btn btn-dark">Find Icons</a>
                                                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#howtoModal">How to Set Icon</button>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Icon</th>
                                                    <th>Status</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Icon</th>
                                                    <th>Status</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                    $result = $services->getAllServices();

                                                    while($row = $result->fetch_assoc()){
                                                        if($row["status"] == 1){
                                                            $statusbtn = "<a href='services?serviceid=$row[serviceid]&status=0' class='btn btn-danger'>Disable</a>";
                                                        }else{
                                                            $statusbtn = "<a href='services?serviceid=$row[serviceid]&status=1' class='btn btn-success'>Unable</a>";
                                                        }

                                                        echo "<tr>
                                                            <td>$row[servicetitle]</td>
                                                            <td> <i class='$row[serviceicon]'></i>   $row[serviceicon]</td>
                                                            <td>$statusbtn</td>
                                                            <td>
                                                                <button class='btn btn-danger' type='button' onclick='confirmDelete($row[serviceid])'>Delete</button>
                                                            </td>
                                                            <td>
                                                                <a href='editservice?serviceid=$row[serviceid]' class='btn btn-secondary'>Edit</a>
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
<script>
    function confirmDelete(serviceid){
        if(confirm("Are you sure to delete this Services ???")){
            window.location.href = "services?delete=true&serviceid="+serviceid;
        }
    }
</script>
</html>

<!-- The Modal -->
<div class="modal" id="howtoModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">How to Set Google Map Location</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <ol>
            <li>Click Find Icons Button</li>
            <li>You will landed in Font awsome free icons library</li>
            <li>Click on Requrid icon</li>
            <li>After open icon box</li>
            <li>Select HTML</li>
            <li>Copy Value of class Attribute</li>
        </ol>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php
if (isset($_POST["addProcess"])) {
    $servicetitle = $services->filterData($_POST["servicetitle"]);
    $servicedescription = $services->filterData($_POST["servicedescription"]);
    $serviceicon = $services->filterData($_POST["serviceicon"]);

    $services->addNewService($servicetitle, $servicedescription, $serviceicon);
    $services->logWriter($adminemail, "New Service $servicetitle Added in Database");
    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <strong>Success : </strong> New Service $servicetitle Added in Database
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
    header("location:services");
}
?>