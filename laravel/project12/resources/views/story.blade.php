<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('story.storytitle')}}</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="container-fluid bg-primary text-white text-center p-5">
        <h1 class="">{{ __('story.storytitle')}} </h1>

        <p class="lead">{{ __('story.storytext')}}</p>

        <div class="alert alert-success">
            <p>{{ __('story.storymoral')}}</p>
        </div>
    </div>
</body>
</html>