<?php
include("Conexion.inc.php");
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];

     $query = ("delete FROM equipos WHERE equipos.nombre =". ($nombre));
    $resultado = $conexion->query($query);
        header('Location: ../index.php');
?>