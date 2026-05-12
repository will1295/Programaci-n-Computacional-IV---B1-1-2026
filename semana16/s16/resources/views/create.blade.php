<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insertar nuevo producto</h1>
    
    <form action="{{route('guardar')}}" method="post">
        @csrf
        <input type="text" name='nombre' placeholder="nombre">
        <input type="number" name='precio' placeholder="precio">
        <input type="number" name='stock' placeholder="stock">
        <textarea name="descripcion" id=""></textarea>
        <button type="submit">Insertar datos</button>
    </form>
</body>
</html>