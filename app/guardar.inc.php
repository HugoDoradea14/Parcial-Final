<?php
include("Conexion.inc.php");
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$director = $_POST['director'];
$capitan = $_POST['capitan'];
$liga = $_POST['liga'];

    

    
    $query = "INSERT INTO equipos(nombre,pais,director,capitan,liga) values( '$nombre','$pais','$director','$capitan','$liga')";
    $resultado = $conexion->query($query);
    header('Location: ../index.php');
?>