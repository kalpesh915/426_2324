<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Enter First Name</label>
        <input type="text" name="fname" required><br>
        <label>Enter Last Name</label>
        <input type="text" name="lname" required><br> 
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["process"])){
        echo filterData($_POST["fname"])." ".filterData($_POST["lname"]);
    }

    function filterData($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
?>