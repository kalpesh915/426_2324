<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/getprocess" method="get">
        <label for="fname">Enter First Name</label>
        <input type="text" name="fname" id="fname" required><br>
        <label for="lname">Enter Last Name</label>
        <input type="text" name="lname" id="lname" required><br>
        <input type="submit" value="Send Data">
        <input type="reset" value="Reset">
    </form>
</body>
</html>