<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Editar Alumno</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <style>
        .container {
            width: 60%;
        }
        
        .btn-agregar {
            width: 100%;
            padding: 10px 10px 10px 10px;
            font-size: 15px;
        }
    </style>
</head>
    
<body>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h5>Editar alumno</h5>
            <form class="" method="post" action="../../scripts/servidor/procesar_cambio.php">
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Numero de control</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="caja_num_control" id="caja_num_control" value="<?php echo $_GET['nc'] ?>" readonly/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Nombre</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="caja_nombre" id="caja_nombre" value="<?php echo $_GET['n'] ?>"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Primer Apellido</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="caja_primer_ap" id="caja_primer_ap" value="<?php echo $_GET['pa'] ?>"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Segundo Apellido</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="caja_segundo_ap" id="caja_segundo_ap" value="<?php echo $_GET['sa'] ?>"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Edad</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="number" class="form-control" name="caja_edad" id="caja_edad" value="<?php echo $_GET['e'] ?>"/>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Semestre</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <select name="select_semestre" class="form-control">
                               <?php           
                                    for($valor=1; $valor<=10; $valor++) {
                                        echo "<option value='" . $valor . "' ";
                                        if ($_GET['s'] == $valor) { 
                                            echo "selected";
                                        }
                                        echo ">" . $valor . "</option>";
                                    }
                                ?> 
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
                                <?php
                                    $carreras = array("Ing. en Sistemas Computacionales"=> "Ingenieria en Sistemas Computacionales",
                                                      "Ing. en Mecatronica"=> "Ingenieria en Mecatronica",
                                                      "Ing. en Industrias Alimentarias"=> "Ingenieria en Industrias Alimentarias",
                                                      "Lic. en Administración"=> "Licenciatura en Administracion",
                                                      "Lic. en Contador Público"=> "Contador Publico");
                                
                                    foreach ($carreras as $clave => $valor) {
                                        echo "<option value='" . $valor . "' ";
                                        if ($_GET['c'] == $valor) { 
                                            echo "selected";
                                        }
                                        echo ">" . $clave . "</option>";
                                    }
                                ?> -->
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group ">
                    <button type="submit" class="btn btn-sm btn-primary btn-agregar">MODIFICAR</button>
                </div>

            </form>
        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>