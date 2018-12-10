<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Altas Alumnos</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <style>
        .btn-agregar {
            width: 100%;
            padding: 10px 10px 10px 10px;
            font-size: 15px;
            background-color: green;
        } 
        
        .btn-agregar:hover {
            background-color: green;
        }
    </style>
</head>
    
<body>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h5>Ingrese los datos del alumno</h5>
            <form class="" method="post" action="../../scripts/servidor/procesar_alta.php">
                
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Numero de control</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="caja_num_control" id="caja_num_control"  placeholder="ej. 14070010"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Nombre</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="caja_nombre" id="caja_nombre"  placeholder="ej. David"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Primer Apellido</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="caja_primer_ap" id="caja_primer_ap"  placeholder="ej. Fernandez"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Segundo Apellido</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="caja_segundo_ap" id="caja_segundo_ap"  placeholder="ej. Villarreal"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Edad</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="number" class="form-control" name="caja_edad" id="caja_edad"  placeholder="ej. 22"/>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Semestre</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <select name="select_semestre" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Carrera</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <select name="select_carrera" class="form-control">
                                <option value="Ingenieria en Sistemas Computacionales">Ing. en Sistemas Computacionales</option>
                                <option value="Ingenieria en Mecatronica">Ing. en Mecatronica</option>
                                <option value="Ingenieria en Industrias Alimentarias">Ing. en Industrias Alimentarias</option>
                                <option value="Licenciatura en Administracion">Lic. en Administración</option>
                                <option value="Contador Publico">Lic. en Contador Público</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group ">
                    <button type="submit" class="btn btn-sm btn-primary btn-agregar">AGREGAR</button>
                </div>
            </form>
            <br>
            
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
                    </tr>";
                echo "</thead>";
                echo "<tbody id='registros_alumnos'>";
                while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<tr>";
                    foreach ($row as $campo=>$dato) {
                        echo "<td>$dato</td>";
                    }
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";

                $sentencia = null;
            ?>

        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>