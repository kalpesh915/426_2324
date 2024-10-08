<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("cdn")
</head>
<body>
    <div class="bg-primary text-white p-5 text-center">
        @if(session("greet"))
            <h1>{{ session("greet") }}</h1>
        @else
            <h1>No Session Found</h1>
        @endif
    </div>
</body>
</html>