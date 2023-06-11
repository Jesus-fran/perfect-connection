<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>

</head>

<body>
    <div class="container">
        <form id="formProducto">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        AGREGAR PRODUCTO
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
                            <label for="precio">Precio</label>
                            <input type="text" id="precio" class="form-control" name="precio" placeholder="precio">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" id="descripcion" class="form-control" name="descripcion" placeholder="descripcion">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="caracteristicas">Caracteristicas</label>
                            <input type="text" id="caracteristicas" class="form-control" name="caracteristicas" placeholder="caracteristicas">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="idservicio">Servicio</label>
                            <input type="text" id="idservicio" class="form-control" name="idservicio" placeholder="idservicio">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                </div>
                <div class="my-3 text-end">
                    <button class="btn btn-primary" type="button" onclick="addProducto()">Agregar Producto</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

<script src="././js/addnewproducto.js"></script>


</html>