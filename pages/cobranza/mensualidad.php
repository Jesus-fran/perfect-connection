<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" id="mensualidades">
            <fieldset class="form-fieldset my-3">
                <div class="page-header my-4">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title">
                        PAGO DE MENSUALIDADES
                    </h2>
                    <div class="text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Ver clientes
                        </button>
                    </div>
                    <hr class="m-0">
                </div>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="folio" name="folio" placeholder="Folio cliente">
                        <label for="folio" class="form-label">Folio cliente</label>
                    </div>
                    <div class="col-sm-6 text-center">
                        <input type="submit" name="enviar" class="btn btn-primary" value="Buscar">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

    <!-- Modal -->
    <!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="table-responsive">
                        <table id="tableAp2" class="table table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                            $selProspecto = $conn -> query("SELECT * FROM cliente ORDER BY idcliente ASC");
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
                                <button class="copy-button btn btn-primary" data-bs-dismiss="modal" data-value="<?php echo $selProspectoRow['idcliente'] ?>">copy</button>
                            </td>
                            <?php
                                }
                            }?>
                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['enviar'])) {
        $folio = $_POST['folio'];
        $selCliente = $conn -> query("SELECT * FROM cliente WHERE idcliente = '$folio'");
        $selClienteRow = $selCliente -> fetch(PDO::FETCH_ASSOC);
        $selcontrato = $conn -> query("SELECT * FROM contrato WHERE idcliente = '$folio'");
        $selcontratoRow = $selcontrato -> fetch(PDO::FETCH_ASSOC);
        $selproducto = $conn -> query("SELECT * FROM producto WHERE idproducto = '$selcontratoRow[idproducto]'");
        $selproductoRow = $selproducto -> fetch(PDO::FETCH_ASSOC);
        $apellido = $selClienteRow['app'] . " " . $selClienteRow['apm'];
?>
    <div class="container">
        <div class="row form-fieldset my-5">
            <div class="col">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title">
                        DATOS PERSONALES
                    </h2>
                </div>
                <hr class="m-0">
                <div class="container border my-3">
                <form id="formMensualidad">
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" hidden id="a" value="<?php echo $folio ?>">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $selClienteRow['nombre']; ?>" readonly>
                                <label for="nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido" value="<?php echo $apellido ?>" readonly>
                                <label for="nombre">Apellido</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
                                <label for="apellido">Fecha</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="monto" name="cantidapagar" value="<?php echo $selproductoRow['precio']; ?>">
                                <label for="cantidapagar">Cuanto paga</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tipopago" name="tipopago">
                                <label for="tipopago">Tipo de pago</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="cantidadpagada" name="cantidadpagada" placeholder="Cantidad pagada">
                                <label for="cantidadpagada">Cantidad pagada</label>
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="form-floating mb-3">
                                <button type="button" onclick="mensualidad()" class="btn btn-primary">Cobrar</button>
                                <button type="submit" class="btn btn-danger">Cancelar</button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title">
                        DATOS DEL SERVICIO
                    </h2>
                </div>
                <hr class="m-0">
                <div class="container border my-3">
                    <div class="row mt-3">
                        <div class="container">
                        <div class="table-responsive">
                            <table id="tableAp" class="table table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">NP</th>
                                        <th scope="col">Mes</th>
                                        <th scope="col">Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $selServicio = $conn -> query("SELECT * FROM mensualidad WHERE folio = '$folio' ORDER BY mes DESC");
                                        $i = 1;
                                        while ($selServicioRow = $selServicio -> fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $selServicioRow['mes']; ?></td>
                                        <td><?php echo $selServicioRow['monto']; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>
</body>
<script src="././js/pagarmensualidad.js"></script>
<script>
    var copyButtons = document.getElementsByClassName("copy-button");
    for (var i = 0; i < copyButtons.length; i++) {
        copyButtons[i].addEventListener("click", function() {
        var valueToCopy = this.getAttribute("data-value");
        document.getElementById("folio").value = valueToCopy;
        });
    }
</script>
</html>