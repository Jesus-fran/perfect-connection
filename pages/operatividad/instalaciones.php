<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programar instalación</title>
</head>
<body>
    <div class="container">
        <form id="insForm">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        PROGRAMAR INSTALACIÓN
                    </h2>
                    <div class="text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VER CLIENTES
                        </button>
                    </div>
                    <hr class="m-0">
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="empleado">Asignar empleado</label>
                            <select name="empleado" id="empleado" class="form-select">
                                <?php
                                    $selEmpleado = $conn -> query("SELECT * FROM empleado");
                                    if ($selEmpleado -> rowCount() > 0) {
                                        while ($selEmpleadoRow = $selEmpleado -> fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <option value="<?php echo $selEmpleadoRow['idempleado']; ?>">
                                    <?php echo $selEmpleadoRow['nombre']; ?>
                                </option>
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="folio">Folio</label>
                            <input type="text" class="form-control" id="folio" name="folio" placeholder="Folio">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="hora">Hora Aproximada</label>
                            <input type="time" class="form-control" id="hora" name="hora" placeholder="Hora">
                        </div>
                    </div>
                </div>
                <div class="text-end mt-3">
                    <button type="button" class="btn btn-primary" onclick="instalacion()">
                        Agendar
                    </button>
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
                            $selProspecto = $conn -> query("SELECT * FROM cliente");
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
<script>
    var copyButtons = document.getElementsByClassName("copy-button");
    for (var i = 0; i < copyButtons.length; i++) {
        copyButtons[i].addEventListener("click", function() {
        var valueToCopy = this.getAttribute("data-value");
        document.getElementById("folio").value = valueToCopy;
        });
    }
</script>
<script src="././js/addinstalacion.js"></script>
</html>