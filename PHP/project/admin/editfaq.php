<?php
require_once("commons/session.php");
require_once("classes/FAQ.class.php");

if(isset($_GET["faqid"])){
    $faqid = $faq->filterData($_GET["faqid"]);

    $result = $faq->getOneFAQ($faqid);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        extract($row);
    }else{
        header("location:faq");    
    }
}else{
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
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- Custome code Here -->
                                    <?php
                                    require_once("commons/sessionprinter.php");
                                    ?>
                                    <div id="addFAQ" >
                                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?faqid=$faqid"; ?>" method="post">
                                            <div class="my-3">
                                                <label class="form-label" for="question">Enter Question</label>
                                                <textarea class="form-control" style="resize: none;" name="question" id="question" required><?= $question; ?></textarea>
                                            </div>

                                            <div class="my-3">
                                                <label class="form-label" for="answer">Enter Answer</label>
                                                <textarea class="form-control" style="resize: none;" name="answer" id="answer" required><?= $answer; ?></textarea>
                                            </div>

                                            <div class="my-3">
                                                <input type="submit" value="Update FAQ" class="btn btn-primary" name="updateProcess">
                                                <input type="reset" class="btn btn-danger" value="Reset">
                                            </div>
                                        </form>
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

<?php
if (isset($_POST["updateProcess"])) {
    $question = $faq->filterData($_POST["question"]);
    $answer = $faq->filterData($_POST["answer"]);

    $faq->updateFAQ($faqid, $question, $answer);
    
    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <strong>Success : </strong> $question FAQ updated in Database
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
    header("location:editfaq?faqid=$faqid");
}
?>