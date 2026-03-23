<?php
    header('Content-Type:application/json');

    $estudiantes = [
        [
        "nombre" => "Maria",
        "edad" => 20,
        "materias" => ["Filosofia","Didactica","Psicologia"]
        ],
        [
        "nombre" => "Pedrito",
        "edad" => 19,
        "materias" => ["Dibujo tecnico","Arquitectura","Matematicas II"]
        ]
    ];

    echo json_encode($estudiantes);



?>