<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar perfil</title>
</head>
<body>
    <div class="container m-5">
        <form id="changeInfoform" autocomplete="off">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        CONFIGURACIÓN DE PERFIL
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-12">
                            <input type="text" hidden class="form-control" id="idempleado" name="idempleado" value="<?php echo $empleadoId ?>" placeholder="idempleado">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contraseñaactual">Contraseña actual</label>
                            <input type="password" class="form-control" id="contraseñaactual" name="contraseñaactual" placeholder="Contraseña actual">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nuevacontraseña">Nueva contraseña</label>
                            <input type="password" class="form-control" id="nuevacontraseña" name="nuevacontraseña" placeholder="Nueva contraseña">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="confirmarcontraseña">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="confirmarcontraseña" name="confirmarcontraseña" placeholder="Confirmar contraseña">
                        </div>
                    </div>
                </div>
                <div class="text-end mt-3">
                    <input class="form-check-input" type="checkbox" name="show-password" id="show-password" value="show" onclick="showPassword()">
                    <label for="show-password">Mostrar contraseñas</label>
                </div>
                <div class="text-end mt-3">
                    <button type="button" onclick="cambiarContraseña()" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
<script src="././js/cambiarcontraseña.js"></script>
</html>