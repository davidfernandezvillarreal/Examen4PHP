<?php
	//PERMITE TENER ACCESO AL ARREGLO DE SECIONES
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Bajas Alumnos</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../../scripts/cliente/busqueda.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        i {
            font-size: 20px;
        }
    </style>
</head>
    
<body>
<div class="container">
    <div class="row main">
        
        <h2>Alumnos</h2>  
        <br><br>

        <?php
            try {
                $dsn = "mysql:host=localhost;dbname=escuela";
                $conexionPDO = new PDO($dsn, "root", "");
            } catch (PDOException $pdoe) {
               error_log($pdeo->getMessage()); 
            }
            
            $consulta = "SELECT * FROM alumnos;";
        
            $sentencia = $conexionPDO->prepare($consulta);
            $sentencia->execute([]);
            
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>
                    <th>Numero de Control</th>
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Edad</th>
                    <th>Semestre</th>
                    <th>Carrera</th>
                    <th></th>
                </tr>";
            echo "</thead>";
            echo "<tbody id='registros_alumnos'>";
            while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)) { 
                echo "<tr>";
                foreach ($row as $campo=>$dato) {
                    echo "<td>$dato</td>";
                }
                
                echo "<td> <a href='../../scripts/servidor/procesar_baja.php?nc=" . $row['num_control'] . "' style = 'color:red'><i class='fas fa-minus-circle'></i></a> </td>";
                echo "</tr>";
            }
            
            echo "</tbody>";
            echo "</table>";

            $sentencia = null;
        ?>    
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script>
        
    </script>
</body>
</html>