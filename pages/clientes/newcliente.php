<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    <div class="container">
        <div class="form-fieldset my-5">
        <div class="page-header my-3">
            <div class="page-pretitle">
                    Administrador
                </div>
                <h2 class="page-title mb-2">
                    BÚSQUEDA DE PROSPECTO
                </h2>
                <hr class="m-0">
            </div>
            <div class="table-responsive">
                <table id="tableAp" class="table is-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Referencias</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $selProspecto = $conn -> query("SELECT * FROM prospecto ORDER BY idcliente ASC");
                            if ($selProspecto -> rowCount() > 0) {
                                $i = 1;
                                while ($selProspectoRow = $selProspecto -> fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo $selProspectoRow['idcliente']; ?>
                            </td>
                            <td>
                                <?php echo $selProspectoRow['nombre']; ?>
                            </td>
                            <td>
                                <?php echo $selProspectoRow['telefono1']; ?>
                            </td>
                            <td>
                                <?php echo $selProspectoRow['direccion']; ?>
                            </td>
                            <td>
                                <?php echo $selProspectoRow['referencias']; ?>
                            </td>
                            <td>
                                <a href="././prosxcliente.php?id=<?php echo $selProspectoRow['idcliente']; ?>"
                                    class="btn btn-primary">Hacer cliente</a>
                            </td>
                            <?php
                                }
                            }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
    if (isset($_POST['btnbuscar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $sql = $conn -> query("SELECT * FROM prospecto WHERE nombre = '$nombre' AND app = '$apellido'");
        $row = $sql -> fetch(PDO::FETCH_ASSOC);
        $nombre = $row['nombre'];
        $app = $row['app'];
        $apm = $row['apm'];
        $tel1 = $row['telefono1'];
        $tel2 = $row['telefono2'];
        $direccion = $row['direccion'];
        $referencia = $row['referencias'];
        $fecha_solicitud = $row['fecha_solicitud'];
        $requerimientos = $row['requerimientos'];
?>
    <div class="container">
        <form id="formCliente" autocomplete="off">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        DATOS DEL CLIENTE
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-12 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="a" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="app">Apellido Paterno</label>
                            <input type="text" class="form-control" id="b" name="app" placeholder="Apellido Paterno" value="<?php echo $app; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="apm">Apellido Materno</label>
                            <input type="text" class="form-control" id="apm" name="apm" placeholder="Apellido Materno" value="<?php echo $apm; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tel1">Teléfono 1</label>
                            <input type="text" class="form-control" id="tel1" name="tel1" placeholder="Teléfono 1" value="<?php echo $tel1; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tel2">Teléfono 2</label>
                            <input type="text" class="form-control" id="tel2" name="tel2" placeholder="Teléfono 2" value="<?php echo $tel2; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="<?php echo $direccion; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="referencia">Referencia</label>
                            <input type="text" class="form-control" id="referencias" name="referencia" placeholder="Referencia" value="<?php echo $referencia; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="fecha_solicitud">Fecha de Solicitud</label>
                            <input type="text" class="form-control" id="fecha_solicitud" name="fecha_solicitud" placeholder="Fecha de Solicitud" value="<?php echo $fecha_solicitud; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="requerimientos">Requerimientos</label>
                            <input type="text" class="form-control" id="requerimientos" name="requerimientos" placeholder="Requerimientos" value="<?php echo $requerimientos; ?>">
                        </div>
                    </div>
                </div>
                <div class="row g-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="fecha_entrega">Coordenadas</label>
                            <input type="text" class="form-control" id="coordenadas" name="coordenadas" placeholder="Coordenadas">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="fecha_entrega">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                </div>
                <div class="text-end my-3">
                    <button type="button" class="btn btn-primary" id="btnGuardar" onclick="newCliente()" name="btnGuardar">Guardar</button>
                    <button type="reset" class="btn btn-secondary" id="btnCancelar" name="btnCancelar">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>
    <?php
    }
    ?>
</body>
<script src="././js/addnewcliente.js"></script>
</html>

<!-- <div class="row g-12">
<div class="col-sm-4">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
</div>
<div class="col-sm-5">
    <div class="form-group">
        <label for="apellido">Apellido Paterno</label>
        <input type="text" class="form-control" id="app" name="apellido" placeholder="Apellido Paterno">
    </div>
</div>
<div class="col-sm-2 text-end ">
    <button type="submit" name="btnbuscar" class="form-control">BUSCAR</button>
</div>
</div> -->