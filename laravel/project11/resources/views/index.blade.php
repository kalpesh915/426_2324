<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-white text-center p-3">Login Page</h1>

        @if (session("error"))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Error : </strong> {{ session("error") }}
            </div>
        @elseif (session("success"))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success : </strong> {{ session("success") }}
            </div>
        @endif

        <form action="/loginprocess" method="POST">
            @csrf
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required>
                <label class="form-label" for="email">Enter Email Address</label>
            </div>

            <div class="my-3 form-floating">
                <input type="password" name="password" id="password" placeholder="Enter Email Password" class="form-control" required>
                <label class="form-label" for="password">Enter Email Password</label>
            </div>

            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>