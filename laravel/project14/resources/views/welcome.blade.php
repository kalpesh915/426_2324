<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @include("cdn")
</head>
<body>
    @include("menu")
    <div class="container-fluid">
        @if(session("error"))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close"></button>
                <strong>Error : </strong> {{ session("error")}}
            </div>
        @elseif (session("success"))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close"></button>
            <strong>Success : </strong> {{ session("success")}}
        </div>
        @endisset
        <h1 class="bg-primary text-white p-3 text-center">
            Home Page
        </h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($studentsData as $student)
                        <tr>
                            <td>{{$student["id"]}}</td>
                            <td>{{$student["fname"]}}</td>
                            <td>{{$student["lname"]}}</td>
                            <td>{{$student["city"]}}</td>
                            <td>{{$student["email"]}}</td>
                            <td>{{$student["phone"]}}</td>
                            <td>
                                <button class="btn btn-danger" onclick="confirmDelete({{$student['id']}})">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="/editstudent/{{$student['id']}}" class="btn btn-primary">
                                    <i class="fa fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<script>
    function confirmDelete(id){
        //alert(id);
        if(confirm("Are you sure to delete this student ??")){
            window.location.assign('http://127.0.0.1:8000/delete/'+id);
        }
    }
</script>