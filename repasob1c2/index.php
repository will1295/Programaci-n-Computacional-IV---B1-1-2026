<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr,th,td{
            border:1px solid black;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tiendita de la esquina</h1>

    <h3>Productos disponibles</h3>

    <table>
        <thead>
            <tr>
                <th>nombre</th>
                <th>precio</th>
                <th>cantidad</th>
                <th>fecha de caducidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $query = "SELECT * FROM productos";
                $resultado = $conexionmysql->query($query);
                while($row = $resultado->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['nombre'];?></td>
                    <td>$<?php echo $row['precio'];?></td>
                    <td><?php echo $row['cantidad'];?></td>
                    <td><?php if($row['fcaducidad']=="0000-00-00")
                    {   echo "Producto no perecedero";
                    }else{
                        echo $row['fcaducidad'];
                    }?></td>
                    <td>
                    <a href="editar.php?id=<?php echo $row['id']?>"><button>Editar</button></a><td>
                <a href="eliminar.php?eliminar=<?php echo $row['id'] ?>">
                    <button>Eliminar</button></a></td>
                </tr>
                <?php endwhile;?>
        </tbody>
    </table>



    <h4>Nuevo producto</h4>
    <form action="crear.php" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Precio</label>
        <input type="number" name="precio" id="" step=0.01 min="0.01">
        <label for="">Cantidad</label>
        <input type="number" name="cantidad" id="" step=1 min=1>
        <label for="">Fecha de caducidad</label>
        <input type="date" name="fecha" id="">
        <button type="submit" name="guardar">Crear nuevo</button>
    </form>

</body>
</html>