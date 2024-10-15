<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('cdn')
</head>

<body>
    @include('menu')
    <div class="container-fluid">
        
        @php
            // print_r($errors->all());
        @endphp

        {{-- <ul class="alert alert-danger">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        @endif
        </ul> --}}

        <h1 class="bg-primary text-center p-3 text-white">Add New Student</h1>

        <form action="/addprocess" method="post">
            @csrf
            <div class="my-2 form-floating">
                <input type="text" name="fname" id="fname" class="form-control"
                    placeholder="Enter First Name"  value={{ old("fname")}}>
                <label class="form-label" for="fname">Enter First Name</label>
                <span class="text-danger">@error("fname")
                    {{ $message }}
                @enderror</span>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="lname" id="lname" class="form-control"
                    placeholder="Enter Last Name"  value={{ old("lname")}}>
                <label class="form-label" for="lname">Enter Last Name</label>
                <span class="text-danger">@error("lname")
                    {{ $message }}
                @enderror</span>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="city" id="city"  class="form-control"
                    placeholder="Enter City Name"  value={{ old("city")}}>
                <label class="form-label" for="city">Enter City Name</label>
                <span class="text-danger">@error("city")
                    {{ $message }}
                @enderror</span>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="email" id="email" class="form-control"
                    placeholder="Enter Email Address" value={{ old("email")}} >
                <label class="form-label" for="email">Enter Email Address</label>
                <span class="text-danger">@error("email")
                    {{ $message }}
                @enderror</span>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="phone" id="phone" class="form-control"
                    placeholder="Enter Phone Number"  value={{ old("phone")}}>
                <label class="form-label" for="phone">Enter Phone Number</label>
                <span class="text-danger">@error("phone")
                    {{ $message }}
                @enderror</span>
            </div>

            <div class="my-2">
                <input type="submit" value="Add New Student" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>

</html>
