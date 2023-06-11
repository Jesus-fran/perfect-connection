<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APs</title>
</head>

<body>
    <div class="container">
        <form id="formFrecuencia">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        Actualizar version
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="version">version</label>
                            <input type="text" class="form-control" id="version" name="version"
                                placeholder="version">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="fecha">fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha"
                                placeholder="fecha">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="cpu">cpu</label>
                            <input type="text" class="form-control" id="cpu" name="cpu" placeholder="cpu">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="ram">ram</label>
                        <input type="text" class="form-control" id="ram" name="ram" placeholder="ram">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="descripcion">descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion">
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <label for="sector">microtik</label>

                    <select name="microtik" id="microtik" class="form-select">
                        <option value="selected">Selecciona el microtik</option>
                        <?php
                          $selMicrotik = $conn->query("SELECT * FROM mikrotik");
                            if($selMicrotik->rowCount() > 0) 
                            {
                              while ($selMicrotikRow = $selMicrotik->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $selMicrotikRow['idmikrotik']; ?>"><?php echo $selMicrotikRow['modelo']; ?>
                        </option>
                        <?php }
                            }
                        else
                        { ?>
                        <option value="0">No se encontró ningun microtik</option>
                        <?php
                        }
                    ?>
                    </select>
                </div>
            </fieldset>
            <div class="text-end my-3">
                <button type="button" onclick="updateMk()" class="btn btn-primary">Añadir APs</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>
        </form>
    </div>
</body>
<script src="././js/update_Mk.js"></script>

</html>