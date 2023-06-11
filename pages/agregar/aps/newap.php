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

        <form id="formrb">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        Actualizar Antena
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-3 mb-2">
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nombre">nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ssid">ssid</label>
                            <input type="text" class="form-control" id="ssid" name="ssid" placeholder="ssid">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="pwd_red">pwd_red</label>
                            <input type="text" class="form-control" id="pwd_red" name="pwd_red" placeholder="pwd_red">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="usuario">usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="pwd_acceso">pwd_acceso</label>
                            <input type="text" class="form-control" id="pwd_acceso" name="pwd_acceso"
                                placeholder="pwd_acceso">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ip">ip</label>
                            <input type="text" class="form-control" id="ip" name="ip" placeholder="ip">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="marca">marca</label>
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="marca">
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <label for="marca">Tipo</label>

                        <select name="tipo" id="tipo" class="form-select">
                            <option value="selected">Selecciona el tipo de antena</option>
                            <option value="Sectorial">Sectorial</option>
                            <option value="Direccional">Direccional</option>
                            <option value="Omnidireccional">Omnidireccional</option>

                            

                        </select>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="descripcion">descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion"
                                placeholder="descripcion">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="precio_ini">precio_ini</label>
                            <input type="text" class="form-control" id="precio_ini" name="precio_ini"
                                placeholder="precio_ini">
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="capacidad_user">capacidad_user</label>
                            <input type="number" class="form-control" id="capacidad_user" name="capacidad_user"
                                placeholder="capacidad_user">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="grados">grados</label>
                            <input type="text" class="form-control" id="grados" name="grados" placeholder="grados">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="sector">Sector</label>

                        <select name="sector" id="sector" class="form-select">
                            <option value="selected">Selecciona el sector</option>
                            <?php
                          $selSector = $conn->query("SELECT * FROM sector");
                            if($selSector->rowCount() > 0) 
                            {
                              while ($selSectorRow = $selSector->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $selSectorRow['idsector']; ?>">
                                <?php echo $selSectorRow['sector']; ?></option>
                            <?php }
                            }
                        else
                        { ?>
                            <option value="0">No se encontró ningun sector</option>
                            <?php
                        }
                    ?>
                        </select>
                    </div>
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="modo">modo</label>
                            <select name="modo" id="modo" class="form-select">
                                <option value="selected">Selecciona el modo</option>
                                <option value="AP">AP</option>
                                <option value="CPE">CPE</option>
                                

                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="fecha">fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha">
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="modo">Modo de operacion</label>
                            <select name="mod_operacion" id="mod_operacion" class="form-select">
                                <option value="selected">Selecciona el modo de operacion</option>
                                <option value="PTMP">PTMP</option>
                                <option value="PTP">PTP</option>

                            </select>
                        </div>
                    </div>


            </fieldset>
            <div class="text-end my-3">
                <button type="button" onclick="addAp()" class="btn btn-primary">Añadir APs</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>
        </form>
</body>
<script src="././js/addnewAps.js"></script>


</html>