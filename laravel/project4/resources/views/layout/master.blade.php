<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project : @yield("title")</title>
    @include("commons.cdn")
</head>
<body>
    @include("commons.header")
    @include("commons.navbar")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                @include("commons.sidebar")
            </div>
            <div class="col-md-8">
                @yield("mainpage")
            </div>
        </div>
        <div>
            <h1 class="text-center">This is New Section of Our Website</h1>
        </div>
    </div>
    @include("commons.footer")
</body>
</html>