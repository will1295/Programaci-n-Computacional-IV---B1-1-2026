<?php
    include 'conexion.php';
    $id = $_GET['id'];

    $stmt = $conexionmysql->prepare("SELECT id, nombre, precio, cantidad, fcaducidad FROM productos WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $producto = $resultado->fetch_assoc();
?>

<h4>Editar producto</h4>
<form action="editarproducto.php" method="post">
    <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
    
    <label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">
    
    <label>Precio</label>
    <input type="number" name="precio" step="0.01" min="0.01" value="<?php echo $producto['precio']; ?>">
    
    <label>Cantidad</label>
    <input type="number" name="cantidad" step="1" min="1" value="<?php echo $producto['cantidad']; ?>">
    
    <label>Fecha de caducidad</label>
    <input type="date" name="fecha" value="<?php echo $producto['fcaducidad']; ?>">
    
    <button type="submit" name="guardar">Editar</button>
</form>