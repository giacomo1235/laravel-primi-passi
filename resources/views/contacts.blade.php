<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
</head>
<body>
   <main>
        @foreach ($contatti as $contatto)
           <h1>Name: {{$contatto['name']}}</h1>
           <h2>Age: {{$contatto['età']}}</h2>
           <h3>Phone: {{$contatto['numero']}}</h3>
        @endforeach 
   </main> 
    
</body>
</html>