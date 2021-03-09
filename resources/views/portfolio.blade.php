<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
</head>
<body>

    <h2>Portfolio</h2>
    
    <div style="display: flex" class="container">
        @foreach ($img as $item)
        
        <img style="width: 25%" src=" {{$item}} " alt="">
        
    @endforeach
    </div>

</body>
</html>