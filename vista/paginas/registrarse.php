<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <title>Registrate</title>
    <!--  -->
    <style>
        
    </style>

</head>

<body>

    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bienvenido Por Favor Registrese <small>It's free!</small></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="../../scripts/servidor/procesar_registro_usuario.php">
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="text" name="caja_user" id="caja_user" class="form-control input-sm" placeholder="Usuario">
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="caja_password" id="caja_password" class="form-control input-sm" placeholder="Contraseña">
                                </div>


                                <div class="form-group">
                                    <input type="password" name="caja_password_confirmation" id="caja_password_confirmation" class="form-control input-sm" placeholder="Confirmar contraseña">
                                </div>
                            </div>

                            <input type="submit" value="Registrar" class="btn btn-info btn-block">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>

    </script>
</body>
</html>
