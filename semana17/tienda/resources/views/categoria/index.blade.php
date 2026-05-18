<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
        <index-categoria :categorias-data='@json($categorias)'></index-categoria>
    </div>
</body>
</html>