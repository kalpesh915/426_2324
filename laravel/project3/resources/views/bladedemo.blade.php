<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{ 10 + 20 }}

    @if (10 > 15)
        <p>True</p>
    @else
        <p>False</p>
    @endif

    @for ($x = 1; $x <= 10; $x++)
        {{ $x }}
    @endfor

    @isset($x)
        <p>$x is Available</p>
    @else
        <p>$x is Not found</p>
    @endisset

    @if (10 > 100)
        <p> 10 > 100</p>
    @elseif (10 < 100)
        <p> 10 < 100</p>
            @else
                <p> Both are false</p>
    @endif

    <?php
    $students = [1 => 'Dhruvisha', 2 => 'Devangi', 3 => 'Hemal', 4 => 'Smit', 5 => 'Aryan'];
    ?>

    {{-- @foreach ($students as $student)
        <p>Welcome {{$student}}</p>
    @endforeach --}}
</body>

</html>


<script>
    //alert("OK");
    console.log(@json($students))
</script>