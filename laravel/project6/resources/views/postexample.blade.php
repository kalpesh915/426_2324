<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST Example</title>
    @include("cdn")
</head>
<body>
    <form action="/postprocess" method="POST">
        @csrf
        <div class="my-3 form-floating">
            <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name">
            <label for="fname">Enter First Name</label>
        </div>
        <div class="my-3 form-floating">
            <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name">
            <label for="lname">Enter Last Name</label>
        </div>
        <div class="my-3">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</body>
</html>