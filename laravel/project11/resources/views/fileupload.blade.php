<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
    @include('cdn')
</head>

<body>
    @include('menu')
    <div class="container-fluid mt-5">
        <h1 class="bg-primary text-white p-4 text-center">File Uplaod</h1>
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Error : </strong> {{ session('error') }}
            </div>
        @elseif (session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success : </strong> {{ session('success') }}
            </div>
        @endif
        <form action="/uploadprocess" method="post" enctype="multipart/form-data">
            @csrf
            <div class="my-3 form-floating">
                <input type="file" name="file1" id="file1" placeholder="Select File" class="form-control" required>
                <label class="form-label" for="file1">Select File</label>
            </div>

            <div class="my-3">
                <input type="submit" value="Upload File" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>

</html>
