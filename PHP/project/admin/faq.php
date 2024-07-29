<?php
require_once("commons/session.php");
require_once("classes/FAQ.class.php");

// change status code
if(isset($_GET["status"])){
    $faqid = $faq->filterData($_GET["faqid"]);
    $status = $faq->filterData($_GET["status"]);

    $faq->changeFAQStatus($faqid, $status);

    header("location:faq");
}

// delete FAQ
if(isset($_GET["delete"])){
    $faqid = $faq->filterData($_GET["faqid"]);
    
    $faq->deleteFAQ($faqid);

    header("location:faq");
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
                        <h1 class="h3 mb-0 text-gray-800">FAQ</h1>
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
                                                <label class="form-label" for="question">Enter Question</label>
                                                <textarea class="form-control" style="resize: none;" name="question" id="question" required></textarea>
                                            </div>

                                            <div class="my-3">
                                                <label class="form-label" for="answer">Enter Answer</label>
                                                <textarea class="form-control" style="resize: none;" name="answer" id="answer" required></textarea>
                                            </div>

                                            <div class="my-3">
                                                <input type="submit" value="Add New FAQ" class="btn btn-primary" name="addProcess">
                                                <input type="reset" class="btn btn-danger" value="Reset">
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Answer</th>
                                                    <th>Status</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Answer</th>
                                                    <th>Status</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                    $result = $faq->getAllFAQ();

                                                    while($row = $result->fetch_assoc()){
                                                        if($row["status"] == 1){
                                                            $statusbtn = "<a href='faq?faqid=$row[faqid]&status=0' class='btn btn-danger'>Disable</a>";
                                                        }else{
                                                            $statusbtn = "<a href='faq?faqid=$row[faqid]&status=1' class='btn btn-success'>Unable</a>";
                                                        }

                                                        echo "<tr>
                                                            <td>$row[question]</td>
                                                            <td>$row[answer]</td>
                                                            <td>$statusbtn</td>
                                                            <td>
                                                                <button class='btn btn-danger' type='button' onclick='confirmDelete($row[faqid])'>Delete</button>
                                                            </td>
                                                            <td>
                                                                <a href='editfaq?faqid=$row[faqid]' class='btn btn-secondary'>Edit</a>
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
    function confirmDelete(faqid){
        if(confirm("Are you sure to delete this FAQ ???")){
            window.location.href = "faq?delete=true&faqid="+faqid;
        }
    }
</script>
</html>

<?php
if (isset($_POST["addProcess"])) {
    $question = $faq->filterData($_POST["question"]);
    $answer = $faq->filterData($_POST["answer"]);

    $faq->addNewFAQ($question, $answer);
    $faq->logWriter($adminemail, "New FAQ $question Added in Database");
    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <strong>Success : </strong> New FAQ $question Added in Database
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
    header("location:faq");
}
?>