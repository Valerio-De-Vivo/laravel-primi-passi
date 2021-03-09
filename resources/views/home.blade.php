<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <nav>
        <ul style="display: flex; list-style:none">

            @foreach ($menu as $menuitem)
                @if ($menuitem == 'home')
                    <a href="/"><li style="padding: 20px; color:rgb(69, 187, 10);"> {{$menuitem}} </li></a>
                @else
                    <a href="{{$menuitem}}"><li style="padding: 20px"> {{$menuitem}} </li></a>
                @endif

            @endforeach

        </ul>
    </nav>
    <h1> Benvenuto nel sito di {{$nome}} {{$cognome}}</h1>

</body>
</html>