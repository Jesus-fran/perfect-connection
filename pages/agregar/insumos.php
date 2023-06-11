<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insumos</title>
</head>
<body>
    <div class="container">
        <form method="post" action="" id="formInsumo" autocomplete="off">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-titlemb-2">
                        AGREGAR INSUMOS
                    </h2>
                </div>
                <div class="row g-12">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="marca" class="required">Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo">
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="caracteristicas">Características</label>
                            <input type="text" class="form-control" id="caracteristicas" name="caracteristicas" placeholder="Características">
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                        
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="idsector">Sector</label>
                            <select name="idsector" id="idsector" class="form-select">
                                <?php
                                    $selSector = $conn->query("SELECT * FROM sector");
                                    if ($selSector->rowCount() > 0) {
                                        while ($row = $selSector->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['idsector']; ?>" id="<?php echo $row['idsector'] ?>"><?php echo $row['sector']; ?></option>
                                        <?php
                                        }
                                    }
                                    else { ?>
                                        <option value="0">No hay sectores</option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="fecha_compra">Fecha de compra</label>
                            <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" placeholder="Fecha de compra">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                </div>
                <div class="text-end my-2">
                    <button type="button" class="btn btn-primary" onclick="newInsumo()" name="agregarInsumo">Agregar</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
<script src="././js/addnewinsumo.js"></script>
</html>