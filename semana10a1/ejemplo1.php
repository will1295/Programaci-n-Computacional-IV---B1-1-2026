<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arreglo = [1,2,3,4,5,6,7,8];
        $arreglo2 = array();
        //Los arreglos comienzan desde el indice 0 en adelante
        //Siento el ultimo valor el indice n-1
        //Donde n es la cantidad de elementos
        $frutas = ["Manzanas","Guineos","Peras","Naranjas","Zapotes"];

        $estudiante = [
            "nombre" => "Juanito",
            "edad" => 25,
            "materias" => ["Programacion","Ingles","Redes"]
        ];
    ?>
    
</body>
   <script>
        const frutas = <?php echo json_encode($frutas)?>;
        console.log(frutas[0]);

        const estudiante = <?php echo json_encode($estudiante)?>;
        console.log(estudiante.nombre);
    </script>
</html>