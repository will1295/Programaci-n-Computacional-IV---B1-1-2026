<?php
$host = "localhost";
$username = "root";
$db = "repasob1c2";
$pass = "";
$port = 3306;

//mysqli -> ?
//pdo -> ?

$conexionmysql = new mysqli($host,$username,$pass,$db);

if($conexionmysql->connect_error){
    die("Error de conexion: ".$conexionmysql->connect_error);
}


?>