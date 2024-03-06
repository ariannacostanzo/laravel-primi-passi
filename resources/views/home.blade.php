<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    Hello from {{$name}}
    <ul>
        <li><a href="{{route('recipes')}}">Vai alle ricette</a></li>
        <li><a href="{{route('videos')}}">Vai ai video</a></li>
        <li><a href="{{route('gallery')}}">Vai alle immagini</a></li>
    </ul>
</body>
</html>