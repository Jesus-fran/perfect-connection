<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato</title>
</head>
<body>
    <div class="container">
        <form id="formContrato">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        NUEVO  CONTRATO
                    </h2>
                    <div class="text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VER CLIENTES
                        </button>
                    </div>
                    <hr class="m-0">
                </div>
                <div class="row g-12">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Cliente</label>
                            <input type="text" placeholder="Folio del cliente" id="idcliente" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Zona</label>
                            <select name="idzona" id="idzona" class="form-select">
                                <?php
                                    $selZona = $conn->query("SELECT * FROM zona");
                                    if ($selZona->rowCount() > 0) {
                                        while ($row = $selZona->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['id_zona']; ?>"><?php echo $row['zona']; ?></option>
                                        <?php
                                        }
                                    }
                                    else { ?>
                                        <option value="0">No hay zonas</option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Sector</label>
                            <select name="idsector" id="idsector" class="form-select">
                                <?php
                                    $selSector = $conn->query("SELECT * FROM sector");
                                    if ($selSector->rowCount() > 0) {
                                        while ($row = $selSector->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['idsector']; ?>"><?php echo $row['sector']; ?></option>
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
                </div>
                <div class="row g-12">
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="">Antena</label>
                            <select name="idantena" id="idantena" class="form-select">
                                <?php
                                    $selAntena = $conn->query("SELECT * FROM antena");
                                    if ($selAntena->rowCount() > 0) {
                                        while ($row = $selAntena->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['idantena']; ?>"><?php echo $row['ssid']; ?></option>
                                        <?php
                                        }
                                    }
                                    else { ?>
                                        <option value="0">No hay antenas</option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="">Mikrotik</label>
                            <select name="idmicrotik" id="idmicrotik" class="form-select">
                                <?php
                                    $selMicrotik = $conn->query("SELECT * FROM mikrotik");
                                    if ($selMicrotik->rowCount() > 0) {
                                        while ($row = $selMicrotik->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['idmikrotik']; ?>"><?php echo $row['modelo']; ?></option>
                                        <?php
                                        }
                                    }
                                    else { ?>
                                        <option value="0">No hay microtiks</option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="">Servicio</label>
                            <select name="idservicio" id="idservicio" class="form-select">
                                <?php
                                    $selServicio = $conn->query("SELECT * FROM servicio");
                                    if ($selServicio->rowCount() > 0) {
                                        while ($row = $selServicio->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['idservicio']; ?>"><?php echo $row['nombre']; ?></option>
                                        <?php
                                        }
                                    }
                                    else { ?>
                                        <option value="0">No hay servicios</option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-12">
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="">Producto</label>
                            <select name="idproducto" id="idproducto" class="form-select">
                                <?php
                                    $selProducto = $conn->query("SELECT * FROM producto");
                                    if ($selProducto->rowCount() > 0) {
                                        while ($row = $selProducto->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['idproducto']; ?>"><?php echo $row['nombre']; ?></option>
                                        <?php
                                        }
                                    }
                                    else { ?>
                                        <option value="0">No hay productos</option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="">Fecha del contrato</label>
                            <input type="date" name="fechacontrato" id="fechacontrato" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="">Fecha de corte</label>
                            <select name="fechacorte" id="fechacorte" class="form-select">
                                <option value="15">El 15 de cada mes</option>
                                <option value="30">El 30 de cada mes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="pago">Metodo de pago</label>
                            <select name="pago" id="pago" class="form-select">
                                <option value="1">Pago por transferencia</option>
                                <option value="2">Pago en local</option>
                                <option value="3">Cobro a domicilio</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="costocontrato">Costo del contrato</label>
                            <input type="number" name="costocontrato" id="costocontrato" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <label for="">Fecha Primera mensualidad</label>
                            <input type="date" name="1" id="1" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="text-end my-3">
                    <button type="button" onclick="addContrato()" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>

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
                        <table id="tableAp" class="table table-striped table-hover" style="width:100%">
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

</body>
<script src="././js/addcontrato.js"></script>
<script>
    var copyButtons = document.getElementsByClassName("copy-button");
    for (var i = 0; i < copyButtons.length; i++) {
        copyButtons[i].addEventListener("click", function() {
        var valueToCopy = this.getAttribute("data-value");
        document.getElementById("idcliente").value = valueToCopy;
        });
    }
</script>
</html>