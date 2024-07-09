<?php
    session_start();
    ob_start();
    require_once("connection.php");

    if(isset($_GET["id"])){
        // get data from database
        $id = $_GET["id"];
        $sqlQuery = "select * from students where id = $id";
        //echo $sqlQuery;
        $result = $connection->query($sqlQuery);

        // convert result to array
        $row = $result->fetch_assoc();

        //print_r($row);

        // convert array to respective variable
        extract($row);
    }else{
        header("location:index.php");
    }

    /*update data process */
    if(isset($_POST["updateProcess"])){
        //echo "ok";
        $id = $_POST["id"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];

        $sqlQuery = "update students set fname = '$fname', lname = '$lname', city = '$city', email = '$email', phone = '$phone', gender = '$gender' where id = $id";
        $connection->query($sqlQuery);

        header("location:updatedata.php?id=$id");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-white p-4 text-center d-flex justify-content-between">Database Management with MySql PHP  <a class="btn btn-warning my-3" href="index.php" >Home</a></h1>
       

        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>

        <div class="my-3">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?id=$id"; ?>" method="post">
                <div class="my-2 form-floating">
                    <input type="text" name="id" id="id" required class="form-control" placeholder="Enter Student ID" value="<?= $id ?>" readonly>
                    <label class="form-label" for="id">Enter Student ID</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name" value="<?= $fname ?>">
                    <label class="form-label" for="fname">Enter First Name</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name" value="<?= $lname ?>">
                    <label class="form-label" for="lname">Enter Last Name</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="text" name="city" id="city" required class="form-control" placeholder="Enter City Name" value="<?= $city ?>">
                    <label class="form-label" for="city">Enter City Name</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address" value="<?= $email ?>">
                    <label class="form-label" for="email">Enter Email Address</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number" value="<?= $phone ?>">
                    <label class="form-label" for="phone">Enter Phone Number</label>
                </div>
                <div class="my-2 form-floating">
                    <select class="form-select" required name="gender" id="gender">
                        <option></option>
                        <option value="male" <?= $gender == "male" ? "selected" : "" ?>>Male</option>
                        <option value="female" <?= $gender == "female" ? "selected" : ""?>>Female</option>
                    </select>
                    <label class="form-label" for="gender">Select Gender</label>
                </div>
                <div class="my-3">
                    <input type="submit" value="update Data" class="btn btn-primary" name="updateProcess">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

