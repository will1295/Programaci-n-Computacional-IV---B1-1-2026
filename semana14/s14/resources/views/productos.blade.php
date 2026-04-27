<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto['id']}}</td>
                <td>{{$producto['nombre']}}</td>
                <td>{{$producto['precio']}}</td>
                <td>{{$producto['stock']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>