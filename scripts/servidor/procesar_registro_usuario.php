<?php
    include("conexion_PDO.php");
    $conexionPDO = conexionPDO("root", "", "bd_usuarios_escuela");

    $user = $_POST['caja_user'];
    $password = $_POST['caja_password'];
    $passwordConfirmation = $_POST['caja_password_confirmation'];

    $consulta = "SELECT * FROM usuarios WHERE user = ? AND password = SHA(?)";

    $sentencia = $conexionPDO->prepare($consulta);
    $sentencia->execute([$user, $password]);
    
    if (empty($user) or empty($password) or empty($passwordConfirmation)) {
        header("Location: ../../vista/paginas/registrarse.php");
    } else {
        if ($row = $sentencia->fetch(PDO::FETCH_ASSOC)!=null) {
            header("Location: ../../vista/paginas/registrarse.php");
        } else {
            if ($password==$passwordConfirmation) {
                $consulta = "INSERT INTO usuarios VALUES (?, SHA(?))";
            
                $sentencia = $conexionPDO->prepare($consulta);
                $sentencia->execute([$user, $password]);

                header("Location: ../../index.html");
            } else {
                header("Location: ../../vista/paginas/registrarse.php");
            }
        }
    }
    
    $sentencia = null;
?>