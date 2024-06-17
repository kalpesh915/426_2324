<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="fn">Enter First Name : </label>
        <input type="text" name="fname" id="fn"><br>
        <label for="ln">Enter Last Name : </label>
        <input type="text" name="lname" id="ln"><br>
        <label for="ct">Enter City Name : </label>
        <input type="text" name="city" id="ct"><br>
        <input type="submit" value="Send Data" name="doProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["doProcess"])){
        extract($_POST);
        echo "<hr>Welcome {$fname} {$lname} to {$city}";    
    }
?>