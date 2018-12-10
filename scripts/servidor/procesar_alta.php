<?php
    include("conexion_PDO.php");
    $conexionPDO = conexionPDO("root", "", "escuela");
    
    $_SESSION['msj_exitoso'] = null;

    $nc = $_POST['caja_num_control'];
    $n = $_POST['caja_nombre'];
    $pa = $_POST['caja_primer_ap'];
    $sa = $_POST['caja_segundo_ap'];
    $e = $_POST['caja_edad'];
    $s = $_POST['select_semestre'];
    $c = $_POST['select_carrera'];

    $consulta = "INSERT INTO alumnos VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    if (isset($nc) and isset($n) and isset($pa) and isset($sa) and isset($e) and isset($s) and isset($c)) {
        $sentencia = $conexionPDO->prepare($consulta);
        $sentencia->execute([$nc, $n, $pa, $sa, $e, $s, $c]);
        
        $sentencia = null;
        header("Location: ../../vista/paginas/inicio.html/altas_alumnos.php");
    }
?>