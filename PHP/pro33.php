<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            PHP Object
            Classes and objects are the two main aspects of object-oriented programming. A class is a template for objects, and an object is an instance of a class.
        */ 

        class Student{
            public $roll, $fname, $lname, $city;

            public function __construct(){
                $this->roll = 15;
                $this->fname = "Zeel";
                $this->lname = "Nimavat";
                $this->city = "Rajkot";
            }
        }

        $ip1 = new Student();

        var_dump($ip1);

    ?>
</body>
</html>