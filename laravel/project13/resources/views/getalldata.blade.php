<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get All Data</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-danger">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Pincode</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($studentsData as $data)
                        <tr>
                            <td>{{$data["id"]}}</td>
                            <td>{{$data["fname"]}}</td>
                            <td>{{$data["lname"]}}</td>
                            <td>{{$data["email"]}}</td>
                            <td>{{$data["phone"]}}</td>
                            <td>{{$data["gender"]}}</td>
                            <td>{{$data["city"]}}</td>
                            <td>{{$data["pincode"]}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>