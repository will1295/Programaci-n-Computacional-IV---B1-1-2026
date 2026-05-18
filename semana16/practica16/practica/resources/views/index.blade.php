<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    <div id="app">
        <pelicula-component 
        :listado="{{$peliculas->toJson()}}"></pelicula-component>
    </div>
</body>
</html>