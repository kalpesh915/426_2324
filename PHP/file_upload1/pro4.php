<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" id="file1" required accept=".jpg, .jpeg">
        <input type="submit" value="Upload File" name="uploadProcess">
    </form>
</body>
</html>

<?php
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];

        //print_r($file1)
        $name = $file1["name"];
        $source = $file1["tmp_name"];
        $date = date("dmY His");
        $random = rand(9999, 99999);
        $type = $file1["type"];
        $destination = "uploads/$date $random $name";

        if($type == "image/jpg" || $type == "image/jpeg"){
            move_uploaded_file($source, $destination);
            echo "File Uploaded";
        }else{
            echo "Please Select .jpg or .jpeg files only";
        }
        
    }
?>