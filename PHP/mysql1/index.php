<?php
    session_start();
    ob_start();
    require_once("connection.php");

    // code for delete record
    if(isset($_GET["delete"])){
        $id = $_GET["id"];

        $sqlQuery = "delete from students where id = $id";
        $connection->query($sqlQuery);
        header("location:index.php");
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
        <h1 class="bg-primary text-white p-4 text-center d-flex justify-content-between">Database Management with MySql PHP  <button class="btn btn-warning my-3" data-bs-toggle="collapse" data-bs-target="#form1">Add New</button></h1>
       

        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>

        <div class="my-3 collapse" id="form1">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="my-2 form-floating">
                    <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name">
                    <label class="form-label" for="fname">Enter First Name</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name">
                    <label class="form-label" for="lname">Enter Last Name</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="text" name="city" id="city" required class="form-control" placeholder="Enter City Name">
                    <label class="form-label" for="city">Enter City Name</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address">
                    <label class="form-label" for="email">Enter Email Address</label>
                </div>
                <div class="my-2 form-floating">
                    <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number">
                    <label class="form-label" for="phone">Enter Phone Number</label>
                </div>
                <div class="my-2 form-floating">
                    <select class="form-select" required name="gender" id="gender">
                        <option></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label class="form-label" for="gender">Select Gender</label>
                </div>
                <div class="my-3">
                    <input type="submit" value="Save Data" class="btn btn-primary" name="saveProcess">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </form>
        </div>
        <hr>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Created AT</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sqlQuery = "select * from students";
                        $result = $connection->query($sqlQuery);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                    <td>$row[id]</td>
                                    <td>$row[fname]</td>
                                    <td>$row[lname]</td>
                                    <td>$row[city]</td>
                                    <td>$row[email]</td>
                                    <td>$row[phone]</td>
                                    <td>$row[gender]</td>
                                    <td>$row[created_at]</td>
                                    <td>
                                        <a href='updatedata.php?id=$row[id]' class='btn btn-primary'><i class='fa fa-pen mx-2'></i></a>
                                        <button type='button' class='btn btn-danger' onclick='confirmDelete($row[id])'><i class='fa fa-trash mx-2'></i></button>
                                    </td>
                                </tr>";
                            }
                        }else{
                            echo "<tr>
                                <th colspan='10'>No Data Found in Table</th>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<script>
    function confirmDelete(id){
        //alert(id);
        if(confirm("Are you sure to delete this data ?")){
            location.assign("index.php?delete=1&id="+id);
        }
    }
</script>

<?php
    // code for insert new data in table

    if(isset($_POST["saveProcess"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];

        $sqlQuery = "insert into students (fname, lname, city, email, phone, gender) values ('$fname', '$lname', '$city', '$email', '$phone', '$gender')";

        if($connection->query($sqlQuery) === true){
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> $fname $lname new Student Added in Database
            </div>";
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Error while creating new Student in Database.
            </div>";
        }

        header("location:index.php");
    }
?>