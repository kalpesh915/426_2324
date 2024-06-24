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
        $size = $file1["size"];
        $mb = 2;
        $maxBytes = $mb * 1048576;

        if($type == "image/jpg" || $type == "image/jpeg"){

            if($maxBytes > $size){
                move_uploaded_file($source, $destination);
                echo "File Uploaded";
            }else{
                echo "Please Select file less than $mb MB.";
            }

        }else{
            echo "Please Select .jpg or .jpeg files only";
        }
        
    }
?>