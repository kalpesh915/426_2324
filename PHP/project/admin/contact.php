<?php
    require_once("commons/session.php");
    require_once("classes/Contact.class.php");

    $result = $contact->getContactDetails();
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
                        <h1 class="h3 mb-0 text-gray-800">Manage Contact us Details</h1>
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
                                            <label for="contactperson">Enter Contact Person Name</label>
                                            <input type="text" name="contactperson" id="contactperson" required class="form-control" value="<?= $contactperson; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="phone1">Enter First Phone Number</label>
                                            <input type="text" name="phone1" id="phone1" required class="form-control" value="<?= $phone1; ?>" pattern="[0-9]{10,15}">
                                        </div>

                                        <div class="my-3">
                                            <label for="phone1">Enter Second Phone Number</label>
                                            <input type="text" name="phone2" id="phone2" class="form-control" value="<?= $phone2; ?>" pattern="[0-9]{10,15}">
                                        </div>

                                        <div class="my-3">
                                            <label for="email1">Enter First Email Address</label>
                                            <input type="email" name="email1" id="email1" required class="form-control" value="<?= $email1; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="email2">Enter Second Email Address</label>
                                            <input type="email" name="email2" id="email2" class="form-control" value="<?= $email2; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="address">Enter Address</label>
                                            <textarea name="address" id="address" required class="form-control" style="resize: none;"><?= $address; ?></textarea>
                                        </div>

                                        <div class="my-3">
                                            <label for="googlemap">Enter Google Map Location 
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#viewModal">View</button>
                                            <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#howtoModal">How to</button></label>
                                            <textarea name="googlemap" id="googlemap" required class="form-control" style="resize: none;" rows="10"><?= $googlemap; ?></textarea>
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

<!-- The Modal -->
<div class="modal" id="viewModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Current Google Map Location</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <iframe src="<?= $googlemap; ?>" style="border:0; height: 300px; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

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
            <li>Open Google Map in Browser</li>
            <li>Select Location to Place on Website</li>
            <li>Click On Location</li>
            <li>Click On Share</li>
            <li>Select Embed on Map</li>
            <li>Copy Value of src Attribute from Iframe Tag</li>
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
    if(isset($_POST["updatePrcocess"])){
        $contactperson = $contact->filterData($_POST["contactperson"]);
        $phone1 = $contact->filterData($_POST["phone1"]);
        $phone2 = $contact->filterData($_POST["phone2"]);
        $email1 = $contact->filterData($_POST["email1"]);
        $email2 = $contact->filterData($_POST["email2"]);
        $address = $contact->filterData($_POST["address"]);
        $googlemap = $contact->filterData($_POST["googlemap"]);

        $contact->updateContact($contactperson, $phone1, $phone2, $email1, $email2, $address, $googlemap);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <strong>Success : </strong> Contact Details are Updated
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("location:contact");
    }
?>