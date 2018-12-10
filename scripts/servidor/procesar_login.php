<?php
    include("conexion_PDO.php");
    $conexionPDO = conexionPDO("root", "", "bd_usuarios_escuela");
    $consulta = "SELECT * FROM usuarios WHERE user = ? AND password = SHA(?)";
    
    $user = $_POST['caja_user'];
    $password = $_POST['caja_password'];

    $sentencia = $conexionPDO->prepare($consulta);
    $sentencia->execute([$user, $password]);

    if (empty($user) or empty($password)) {
        $sentencia = null;
        header("Location: ../../index.html");
    } else {
        $row = $sentencia->fetch(PDO::FETCH_ASSOC);
        if ($user==$row['user'] and sha1($password)==$row['password']) {
            $sentencia = null;
            header("Location: ../../vista/paginas/inicio.html");
        } else {
            $sentencia = null;
            header("Location: ../../index.html");
        }
    }
?>