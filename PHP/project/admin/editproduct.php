<?php
require_once("commons/session.php");
require_once("classes/Products.class.php");

if (isset($_GET["productid"])) {
    $prodcutid = $_GET["productid"];

    $result = $products->getOneProduct($prodcutid);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        extract($row);
    } else {
        header("location:manageproduct");
    }
} else {
    header("location:manageproduct");
}

if(isset($_GET["delete"])){
    $imageid = $_GET["imageid"];

    $products->deleteProductImage($imageid);
    $prodcutid = $_GET["productid"];
    header("location:editproduct?productid=$prodcutid");
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
                        <h1 class="h3 mb-0 text-gray-800">Add New Product</h1>
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
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?productid=$prodcutid"; ?>" method="post" enctype="multipart/form-data">
                                        <div id="accordion">

                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                                        Product Basic Details
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="my-3">
                                                            <label for="productname" class="form-label">Enter Product Name</label>
                                                            <input type="text" name="productname" id="productname" required class="form-control" value="<?= $productname; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productcategory" class="form-label">Select Product Category</label>
                                                            <select name="productcategory" id="productcategory" required class="form-control">
                                                                <option></option>
                                                                <?php
                                                                $result = $products->getAllCategory();

                                                                while ($row = $result->fetch_assoc()) {
                                                                    if ($productcategory == $row["categoryid"]) {
                                                                        echo "<option value='$row[categoryid]' selected>$row[categoryname]</option>";
                                                                    } else {
                                                                        echo "<option value='$row[categoryid]'>$row[categoryname]</option>";
                                                                    }
                                                                }

                                                                ?>
                                                            </select>
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="brandname" class="form-label">Enter Brand Name</label>
                                                            <input type="text" name="brandname" id="brandname" required class="form-control" value="<?= $brandname; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="manufacturedate" class="form-label">Enter Manufacture date</label>
                                                            <input type="date" name="manufacturedate" id="manufacturedate" required class="form-control" value="<?= $manufacturedate; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="expirydate" class="form-label">Enter Expiry Date</label>
                                                            <input type="date" name="expirydate" id="expirydate" required class="form-control" value="<?= $expirydate; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                                        Product Data
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="my-3">
                                                            <label for="material" class="form-label">Enter Material Details</label>
                                                            <input type="text" name="material" id="material" required class="form-control" value="<?= $material; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="packaging" class="form-label">Enter Packaging Details</label>
                                                            <input type="text" name="packaging" id="packaging" required class="form-control" value="<?= $packaging; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="dimention" class="form-label">Enter Dimention Details</label>
                                                            <input type="text" name="dimention" id="dimention" required class="form-control" value="<?= $dimention; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="color" class="form-label">Enter Color Details</label>
                                                            <input type="text" name="color" id="color" required class="form-control" value="<?= $color; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="weight" class="form-label">Enter Weight Details</label>
                                                            <input type="text" name="weight" id="weight" required class="form-control" value="<?= $weight; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productdescription" class="form-label">Enter Product Description</label>
                                                            <textarea name="productdescription" id="productdescription" required class="form-control"><?= $productdescription; ?></textarea>
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="country" class="form-label">Enter Country Details</label>
                                                            <input type="text" name="country" id="country" required class="form-control" value="<?= $country; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="handling" class="form-label">Enter Handling Details</label>
                                                            <input type="text" name="handling" id="handling" required class="form-control" value="<?= $handling; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="sku" class="form-label">Enter SKU</label>
                                                            <input type="text" name="sku" id="sku" required class="form-control" value="<?= $sku; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                                        Price Details
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="my-3">
                                                            <label for="price" class="form-label">Enter Price</label>
                                                            <input type="text" name="price" id="price" required class="form-control" value="<?= $price; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="discount" class="form-label">Enter Discount</label>
                                                            <input type="text" name="discount" id="discount" required class="form-control" value="<?= $discount; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="warranty" class="form-label">Enter Warranty</label>
                                                            <input type="text" name="warranty" id="warranty" required class="form-control" value="<?= $warranty; ?>">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="minimumorder" class="form-label">Enter Minimum Order</label>
                                                            <input type="text" name="minimumorder" id="minimumorder" required class="form-control" value="<?= $minimumorder; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                                        Product Media
                                                    </a>
                                                </div>
                                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <?php
                                                            $result = $products->getProductMedia($prodcutid);

                                                            while ($row = $result->fetch_assoc()) {
                                                                if ($row["mediatype"] == "image") {
                                                                    echo "<div class='col-md-4'>
                                                                    <img src='$row[filepath]' class='w-100 my-3'>
                                                                    <button type='button' class='btn btn-danger' onclick='confirmDelete($row[productimageid])'>Delete</button>
                                                                    </div>";
                                                                } else {
                                                                    echo "<div class='col-md-4'>
                                                                        <object data='$row[filepath]' class='w-100'></object>
                                                                        <button type='button' class='btn btn-danger' onclick='confirmDelete($row[productimageid])'>Delete</button>
                                                                        </div>";
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="my-3">
                                                            <label for="media" class="form-label">Select Product Media Files </label>
                                                            <input type="file" name="media[]" id="media" class="form-control" accept=".jpg, .jpeg, .png, .mp4" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="my-3">
                                            <input type="submit" value="Update Product" class="btn btn-primary" name="updateProcess">
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

<script>
    function confirmDelete(imageid){
        //alert(imageid);
        if(confirm("Are you sure to delete this product image / video ??")){
            window.location.href = "editproduct?productid=<?=$prodcutid?>&delete=true&imageid="+imageid;
        }
    }
</script>

<?php
if (isset($_POST["updateProcess"])) {

    $productname =  $products->filterData($_POST["productname"]);
    $productcategory =  $products->filterData($_POST["productcategory"]);
    $brandname =  $products->filterData($_POST["brandname"]);
    $manufacturedate = $products->filterData($_POST["manufacturedate"]);
    $expirydate = $products->filterData($_POST["expirydate"]);
    $material = $products->filterData($_POST["material"]);
    $packaging = $products->filterData($_POST["packaging"]);
    $dimention = $products->filterData($_POST["dimention"]);
    $color = $products->filterData($_POST["color"]);
    $weight = $products->filterData($_POST["weight"]);
    $productdescription = $products->filterData($_POST["productdescription"]);
    $country = $products->filterData($_POST["country"]);
    $handling = $products->filterData($_POST["handling"]);
    $sku =  $products->filterData($_POST["sku"]);
    $price = $products->filterData($_POST["price"]);
    $discount = $products->filterData($_POST["discount"]);
    $warranty = $products->filterData($_POST["warranty"]);
    $minimumorder = $products->filterData($_POST["minimumorder"]);

    $products->updateProduct($prodcutid, $productname, $productcategory, $brandname, $manufacturedate, $expirydate, $material, $packaging, $dimention, $color, $weight, $productdescription, $country, $handling, $sku, $price, $discount, $warranty, $minimumorder);

    $media = $_FILES["media"];
    $count = count($media);
    $validTypes = ["image/jpg", "image/jpeg", "image/png", "video/mp4"];
    $validfile = 0;
    $invalidfile = 0;

    for ($i = 0; $i < $count - 1; $i++) {
        $source = $media["tmp_name"][$i];
        $type = $media["type"][$i];
        $date = date("dmYHis");
        $random = rand(9999, 99999);
        $filename = $media["name"][$i];

        if (in_array($type, $validTypes)) {
            if ($type == "video/mp4") {
                $mediatype = "video";
                $destination = "productimages/video $date $random $filename";
            } else {
                $mediatype = "image";
                $destination = "productimages/image $date $random $filename";
            }
                $products->addProductMedia($productid, $destination, $mediatype);
                move_uploaded_file($source, $destination);
                $validfile++;
            } else {
                $invalidfile++;
            }
    }

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <strong>Success : </strong> $productname Updated in Database with $validfile Files Uploaded and $invalidfile Files are failed to upload.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";

    header("location:editproduct?productid=$prodcutid");
}
?>