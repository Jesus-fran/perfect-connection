<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados|RS WISP</title>
</head>
<body>
    <div class="container">
        <form id="formZona">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        AGREGAR NUEVA ZONA
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="app">Apellido paterno</label>
                            <input type="text" id="app" class="form-control" name="app" placeholder="app">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="apm">Apellido materno</label>
                            <input type="text" id="apm" class="form-control" name="apm" placeholder="apm">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tel">Telefono</label>
                            <input type="text" id="tel" class="form-control" name="tel" placeholder="tel">
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email">Correo electronico</label>
                            <input type="text" id="email" class="form-control" name="email" placeholder="email">
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="rol">Rol</label>
                            <input type="text" id="rol" class="form-control" name="rol" placeholder="rol">
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tipo">Tipo de empleado</label>
                            <input type="text" id="tipo" class="form-control" name="tipo" placeholder="tipo">
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tipo">Estatus</label>
                            <input type="text" id="estatus" class="form-control" name="estatus" placeholder="estatus">
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="sueldo">Sueldo</label>
                            <input type="text" id="sueldo" class="form-control" name="sueldo" placeholder="sueldo">
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="fecha_ingreso">Fecha de Ingreso</label>
                            <input type="date" required id="fecha_ingreso" placeholder="Fecha de ingreso">
                        </div>
                </div>  
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="text" id="password" class="form-control" name="descripcion" placeholder="descripción">
                        </div>
                </div>
                
                <div class="my-3 text-end">
                    <button class="btn btn-primary" type="button" onclick="addEmpleado()">Agregar Empleado</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
<script src="././js/addnewempleado.js"></script>
</html>
