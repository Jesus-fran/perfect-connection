<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona</title>

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
                            <label for="nombre">Nombre de la zona</label>
                            <input type="text" class="form-control" id="zona" name="zona" placeholder="zona">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nombre">Descripción de la zona</label>
                            <input type="text" id="desc" class="form-control" name="descripcion" placeholder="descripción">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nombre">Código de la zona</label>
                            <input type="text" id="codigo_zona" class="form-control" name="codigo_zona" placeholder="codigo_zona">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                </div>
                <div class="my-3 text-end">
                    <button class="btn btn-primary" type="button" onclick="addZona()">Agregar zona</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
<script src="././js/addnewzona.js"></script>


</html>