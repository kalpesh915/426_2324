<?php
require_once("commons/session.php");
require_once("classes/Team.class.php");

if (isset($_GET["teamid"])) {
    $teamid = $team->filterData($_GET["teamid"]);

    $result = $team->getOneTeamMember($teamid);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        extract($row);
    } else {
        header("location:manageteam");
    }
} else {
    header("location:manageteam");
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
                        <h1 class="h3 mb-0 text-gray-800">Add New Member in Team</h1>
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

                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?teamid=$teamid"; ?>" method="post" enctype="multipart/form-data">
                                        <div class="my-3">
                                            <label for="membername" class="form-label">Enter Member Name</label>
                                            <input type="text" name="membername" id="membername" required class="form-control" value="<?= $membername; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="designation" class="form-label">Enter Member Designation</label>
                                            <input type="text" name="designation" id="designation" required class="form-control" value="<?= $designation; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="experience" class="form-label">Enter Member Experience</label>
                                            <input type="text" name="experience" id="experience" required class="form-control" value="<?= $experience; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="jobdescriptrion" class="form-label">Enter Descriptrion</label>
                                            <input type="text" name="jobdescription" id="jobdescriptrion" required class="form-control" value="<?= $jobdescription; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="photo" class="form-label">Enter Member Photo </label>
                                            <input type="file" name="photo" id="photo" class="form-control" accept=".jpg">
                                        </div>

                                        <div class="my-3">
                                            <label for="facebook" class="form-label">Enter Member Facebook Link </label>
                                            <input type="url" name="teamfacebook" id="teamfacebook" class="form-control" value="<?= $teamfacebook; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="twitter" class="form-label">Enter Member Twitter Link </label>
                                            <input type="url" name="teamtwitter" id="teamtwitter" class="form-control" value="<?= $teamtwitter; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="instagram" class="form-label">Enter Member Instagram Link </label>
                                            <input type="url" name="teaminstagram" id="teaminstagram" class="form-control" value="<?= $teaminstagram; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="linkedin" class="form-label">Enter Member Linkedin Link </label>
                                            <input type="url" name="teamlinkedin" id="teamlinkedin" class="form-control" value="<?= $teamlinkedin; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="teamemail" class="form-label">Enter Member Email Address </label>
                                            <input type="email" name="teamemail" id="teamemail" class="form-control" value="<?= $teamemail; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="teamphone" class="form-label">Enter Member Phone Number </label>
                                            <input type="text" name="teamphone" id="teamphone" class="form-control" value="<?= $teamphone; ?>">
                                        </div>

                                        <div class="my-3">
                                            <input type="submit" value="Update Member" class="btn btn-primary" name="updateProcess">
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
if (isset($_POST["updateProcess"])) {
    require_once("classes/Team.class.php");

    $photo = $_FILES["photo"];

    if (empty($photo["name"])) {
        $destination = "";
    } else if ($photo["type"] == "image/jpg" || $photo["type"] == "image/jpeg") {
        $photo = $_FILES["photo"];
        $source = $photo["tmp_name"];
        $random = rand(9999, 99999);
        $date = date("dmYHis");
        $imagename = $photo["name"];
        $destination = "memberimages/$random $date $membername $imagename";
        move_uploaded_file($source, $destination);
    } else {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <strong>Error : </strong> Must Select *.JPG files only.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
    }

    $membername = $team->filterData($_POST["membername"]);
    $designation = $team->filterData($_POST["designation"]);
    $experience = $team->filterData($_POST["experience"]);
    $jobdescription = $team->filterData($_POST["jobdescription"]);

    $teamfacebook = $team->filterData($_POST["teamfacebook"]);
    $teamtwitter = $team->filterData($_POST["teamtwitter"]);
    $teaminstagram = $team->filterData($_POST["teaminstagram"]);
    $teamlinkedin = $team->filterData($_POST["teamlinkedin"]);
    $teamemail = $team->filterData($_POST["teamemail"]);
    $teamphone = $team->filterData($_POST["teamphone"]);



    $team->updateTeamMember($teamid, $membername, $designation, $experience, $jobdescription, $destination, $teamfacebook, $teamtwitter, $teaminstagram, $teamlinkedin, $teamemail, $teamphone);


    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <strong>Success : </strong> Team Member $membername Updated in Database
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";


    header("location:editmember?teamid=$teamid");
}
?>