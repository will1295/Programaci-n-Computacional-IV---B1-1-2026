<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "universidad";


    try{
         $conn = new mysqli($host,$user,$pass,$db);
    }
    catch(Error $e){
        die("Error de conexion: ".$conn->connect_error);
    }
   

?>