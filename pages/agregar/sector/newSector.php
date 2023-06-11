<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sector</title>
</head>

<body>
    <div class="container">
        <form id="formSector">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        SECTOR
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-12">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="sector">Sector</label>
                            <input type="text" class="form-control" id="sector" name="sector" placeholder="sector">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="altura">altura</label>
                            <input type="text" class="form-control" id="altura" name="altura" placeholder="altura">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mt-2">
                            <label for="tipo">tipo</label>
                            <select name="tipo" id="tipo" class="form-select">
                                <option value="Antena">Antena</option>
                                <option value="Mastil">Mastil</option>
                                <option value="Escalable">Escalable</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="costo_inicial">costo_inicial</label>
                            <input type="number" class="form-control" id="costo_inicial" name="costo_inicial"
                                placeholder="costo_inicial">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contacto">contacto</label>
                            <input type="text" class="form-control" id="contacto" name="contacto" placeholder="contacto">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mt-2">
                            <label for="tipo">tipo</label>
                            <select name="zona" id="zona" class="form-select">
                                <option value="selected">Selecciona la zona</option>
                                <?php
                          $selZona = $conn->query("SELECT * FROM zona");
                            if($selZona->rowCount() > 0) 
                            {
                              while ($selZonaRow = $selZona->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $selZonaRow['id_zona']; ?>"><?php echo $selZonaRow['zona']; ?>
                                </option>
                                <?php }
                            }
                        else
                        { ?>
                                <option value="0">No se encontró ninguna Zona</option>
                                <?php
                        }
                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contacto">contacto</label>
                            <input type="tel" class="form-control" id="tel_contacto" name="tel_contacto" placeholder="tel_contacto">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mt-2">
                            <label for="Estado">Estado del sector</label>
                            <select name="est_sector" id="est_sector" class="form-select">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                                <option value="2">En mantenmiento</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-end my-2">
                        <button type="button"  onclick="addSector()" class="btn btn-primary">Guardar</button>
                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
<script src="././js/addnewsector.js"></script>

</html>