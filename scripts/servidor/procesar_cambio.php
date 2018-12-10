<?php
    include("conexion_PDO.php");
    $conexionPDO = conexionPDO("root", "", "escuela");

    $nc = $_POST['caja_num_control'];
    $n = $_POST['caja_nombre'];
    $pa = $_POST['caja_primer_ap'];
    $sa = $_POST['caja_segundo_ap'];
    $e = $_POST['caja_edad'];
    $s = $_POST['select_semestre'];
    $c = $_POST['select_carrera'];

    $consulta = "UPDATE alumnos SET nombre = ?, primer_ap =  ?, segundo_ap = ?, edad = ?, semestre = ?, carrera = ? WHERE num_control = ?";
    
    if (isset($nc) and isset($n) and isset($pa) and isset($sa) and isset($e) and isset($s) and isset($c)) {
        $sentencia = $conexionPDO->prepare($consulta);
        $sentencia->execute([$n, $pa, $sa, $e, $s, $c, $nc]);
        
        header("Location: ../../vista/paginas/inicio.html/cambios_alumnos.php");
    } else {
        
    }
    
    $sentencia = null;
?>