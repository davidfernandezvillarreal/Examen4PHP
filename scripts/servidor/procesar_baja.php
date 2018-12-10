<?php
    session_start();
    include("conexion_PDO.php");
    $conexionPDO = conexionPDO("root", "", "escuela");
    
    $nc = $_GET["nc"];
	$consulta = "DELETE FROM alumnos WHERE num_control = ?";

    $sentencia = $conexionPDO->prepare($consulta);
    $sentencia->execute([$nc]);
    $sentencia = null;
    header("Location: ../../vista/paginas/inicio.html/bajas_alumnos.php");	
?>