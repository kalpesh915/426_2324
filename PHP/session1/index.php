<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php
    require_once("cdn.php");
    ?>
</head>

<body>
    <div class="conatiner-fluid">
    <h1 class="text-white bg-dark text-center p-3">Login Form</h1>
        <?php
        if (isset($_SESSION["msg"])) {
            echo $_SESSION["msg"];
            unset($_SESSION["unset"]);
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required autofocus>
                <label for="email">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="password" name="password" id="password" placeholder="Enter Email Password" class="form-control" required>
                <label for="password">Enter Email Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>

</html>

<?php
// code for valid email and password
if (isset($_POST["loginProcess"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == "admin@project.com" and $password == "admin") {
        $_SESSION["validuser"] = $email;
        header("location:home.php");
    } else {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Invalid Username or Password
            </div>";

        header("location:index.php");
    }
}
?>