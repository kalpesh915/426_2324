<?php
    require_once("commons/session.php");
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
                        <h1 class="h3 mb-0 text-gray-800">Add New Image</h1>
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
                                     <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                        <div class="my-3">
                                            <label class="form-label" for="imagetitle">Enter Image Title</label>
                                            <input type="text" name="imagetitle" id="imagetitle" required class="form-control">
                                        </div>

                                        <div class="my-3">
                                            <label class="form-label" for="imagedescription">Enter Image Description</label>
                                            <textarea class="form-control" name="imagedescription" id="imagedescription" required></textarea>
                                        </div>

                                        <div class="my-3">
                                            <label class="form-label" for="imagefile">Select Image file</label>
                                            <input type="file" name="imagefile" id="imagefile" required class="form-control" accept=".jpg">
                                        </div>

                                        <div class="my-3">
                                            <label class="form-label" for="imagetype">Select Image Type</label>
                                            <select name="imagetype" id="imagetype" required class="form-control">
                                                <option></option>
                                                <option value="1">Gallery</option>
                                                <option value="2">Slider</option>
                                            </select>
                                        </div>

                                        <div class="my-3">
                                            <input type="submit" value="Add New Image" class="btn btn-primary" name="uplaodProcess">
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

<?php 
    if(isset($_POST["uplaodProcess"])){
        require_once("classes/Images.class.php");

        $imagetitle = $images->filterData($_POST["imagetitle"]);
        $imagedescription = $images->filterData($_POST["imagedescription"]);
        $imagetype = $images->filterData($_POST["imagetype"]);
        $imagefile = $_FILES["imagefile"];

        if($imagefile["type"] == "image/jpg" || $imagefile["type"] == "image/jpeg"){
            $name = $imagefile["name"];
            $src = $imagefile["tmp_name"];
            $random = rand(9999, 99999);
            $time = date("dmYHis");
            
            if($imagetype == 1){
                $destination = "images/Gallery $time $random $name";
            }else{
                $destination = "images/Slider $time $random $name";
            }
            
            $images->addNewImage($imagetitle, $imagedescription, $destination, $imagetype);

            move_uploaded_file($src, $destination);

            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <strong>Success : </strong> New Image Uploaded on Server
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <strong>Error : </strong> Please Select Valid *.JPG files only.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        }

        header("location:addnewimage");
    }
?>