<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lravel Primi Passi</title>
    <style>
        main {
            width: 100%;
            text-align: center;
        }
        ul {
            text-decoration: none;
        }
        li {
            display: inline-block;
        }
    </style>
</head>
<body>
    <main>
        <h1>Hello World!</h1>
        <ul>
        <li><a href="{{route('contacts')}}">CONTATTI</a></li>
        <li><a href="{{route('headermenu')}}">HEADER</a></li>
        <li><a href="{{route('chisiamo')}}">CHI SIAMO</a></li>
        <li><a href="{{route('dadoveveniamo')}}">DA DOVE VENIAMO</a></li>
    </ul>
    </main>
    
</body>
</html>