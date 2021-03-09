<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi siamo</title>
</head>
<body>

    @foreach ($text as $team)
        <div style="text-align: center">
            <h2> {{$team}} </h2>
            <img style="width: 300px" src=" {{$img}} " alt="">
        </div>
    @endforeach

    

</body>
</html>