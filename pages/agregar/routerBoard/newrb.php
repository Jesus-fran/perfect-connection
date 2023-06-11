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
        <form id="formAPs">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        REGISTRO DE APs
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="modelo">modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="modelo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="precio">precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" placeholder="precio">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="capacidad_user">capacidad_user</label>
                            <input type="number" class="form-control" id="capacidad_user" name="capacidad_user" placeholder="capacidad user">
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="user_admin">user_admin</label>
                            <input type="text" class="form-control" id="user_admin" name="user_admin" placeholder="user admin">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="pwd_admin">pwd_admin</label>
                            <input type="text" class="form-control" id="pwd_admin" name="pwd_admin" placeholder="pwd_admin">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ip_wan">ip_wan</label>
                            <input type="text" class="form-control" id="ip_wan" name="ip_wan" placeholder="ip_wan">
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ip_lan">ip_lan</label>
                            <input type="text" class="form-control" id="ip_lan" name="ip_lan" placeholder="ip_lan">
                        </div>
                    </div>
            <div class="col-sm-3 mb-3">
            <label for="sector">sector</label>

                <select name="sector" id="sector" class="form-select">
                    <option value="selected">Selecciona el sector</option>
                    <?php
                          $selSector = $conn->query("SELECT * FROM sector");
                            if($selSector->rowCount() > 0) 
                            {
                              while ($selSectorRow = $selSector->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $selSectorRow['idsector']; ?>"><?php echo $selSectorRow['sector']; ?></option>
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
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="fecha_compra">fecha compra</label>
                            <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" placeholder="Fecha de Compra">
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="text-end my-3">
                <button type="button" onclick="addRouter()" class="btn btn-primary">Añadir APs</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>
        </form>
    </div>
</body>
<script src="././js/addnewrouter.js"></script>
</html>