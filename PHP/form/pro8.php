<?php
    // define required varibles
    $fname = $lname = $email = $website = $comment = $gender = "";
    $fnameerr = $lnameerr = $emailerr = $websiteerr = $commenterr = $gendererr = "";

    // check for form submit
    if($_POST["process"]){
        if(!empty($_POST["fname"])){
            $fname = filterData($_POST["fname"]);
        }else{
            $fnameerr = "First name is Required";
        }

        if(!empty($_POST["lname"])){
            $lname = filterData($_POST["lname"]);
        }else{
            $lnameerr = "Last name is Required";
        }

        if(!empty($_POST["email"])){
            $email = filterData($_POST["email"]);
        }else{
            $emailerr = "Email is Required";
        }

        if(!empty($_POST["website"])){
            $website = filterData($_POST["website"]);
        }else{
            $websiteerr = "Website is Required";
        }

        if(!empty($_POST["comment"])){
            $comment = filterData($_POST["comment"]);
        }else{
            $commenterr = "Comment is Required";
        }

        if(!empty($_POST["gender"])){
            $gender = filterData($_POST["gender"]);
        }else{
            $gendererr = "Gender is Required";
        }
    }

    function filterData($data){
        $data = trim($data);
        stripslashes($data);
        htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Enter First Name</label>
        <input type="text" name="fname"> <span class="error">* <?= $fnameerr; ?></span><br>
        <label>Enter Last Name</label>
        <input type="text" name="lname"> <span class="error">* <?= $lnameerr; ?></span><br>
        <label>Enter Email Address</label>
        <input type="text" name="email"> <span class="error">* <?= $emailerr; ?></span><br>
        <label>Enter Website</label>
        <input type="text" name="website"> <span class="error">* <?= $websiteerr; ?></span><br>
        <label>Enter Comment</label>
        <input type="text" name="comment"> <span class="error">* <?= $commenterr ?></span><br>
        <label>Select Gender</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female <span class="error">* <?= $gendererr; ?></span><br>

        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>