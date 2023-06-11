<?php
session_start(); // Iniciar sesión
if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php"); // Si no existe una sesión iniciada, redireccionar a index.php

?>


<?php include("conn.php"); ?>
<!-- incluir el archivo conn.php -->

<?php include("includes/header.php"); ?>
<!-- incluir el archivo header.php -->
<?php 
  include("query/selectData.php"); //incluye el archivo de consultas a la base de datos
 ?>
<?php

$freId = $_GET['id'];

$selFre = $conn->query("SELECT * FROM antena WHERE idantena = '$freId'");
$selFreRow = $selFre->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="assets/dist/css/style.css" rel="stylesheet"> <!-- importa el archivo de estilo -->


    <title>frecuencia</title>
</head>

<body id="body">
    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-6">
                <div id=refreshData>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Frecuencia</h5>
                            <form class="row g-3" method="post" id="formFrecuencia">
                                <div class="col-12">
                                    <label class="form-label">nombre</label>
                                    <input type="hidden" name="freId" value="<?php echo $selFreRow['idantena']; ?>"> <!-- campo oculto para el id del examen -->

                                    <p class="fs-3"><?php echo $selFreRow['nombre']; ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">ip</label>
                                    <p class="fs-3"><?php echo $selFreRow['ip']; ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">tipo</label>
                                    <p class="fs-3"><?php echo $selFreRow['tipo']; ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">descripcion</label>
                                    <p class="fs-3"><?php echo $selFreRow['descripcion']; ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">sector</label>
                                    <p class="fs-3">
                                        <?php
                                $sectorId = $selFreRow['idsector'];
                                $selSector = $conn->query("SELECT * FROM sector WHERE idsector = '$sectorId'"); 
                                while ($selSectorRow = $selSector->fetch(PDO::FETCH_ASSOC)) { 
                                    echo $selSectorRow['sector'];
                                    }
                            ?>

                                    </p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">modo</label>
                                    <p class="fs-3"><?php echo $selFreRow['modo']; ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">mod_operacion</label>
                                    <p class="fs-3"><?php echo $selFreRow['mod_operacion']; ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Estado de la antena</label>
                                    <select class="form-control" name="newEstado" required="">
                                        <option value="<?php echo $selFreRow['est_antena']; ?>">
                                            <?php 
                              if($selFreRow['est_antena']==1)
                              {
                                echo "Activo";
                              }
                              else if($selFreRow['est_antena']==0)
                              {
                                echo "Inactivo";
                              }
                              else if($selFreRow['est_antena']==2)
                              {
                                echo "En mantenimiento";
                              }

                            ?>
                                        </option>
                                        <option value="1">Activo</option>
                                        <option value="2">En mantenimiento</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Actualizar</button> <!-- boton para actualizar el examen -->
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Frecuencia</h5>
                        <div class="btn-actions-pane-right">
                            <button class="btn btn-sm btn-primary " data-bs-toggle="modal"
                                data-bs-target="#modalForAddFrecuencia">Agregar Frecuencia</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="scroll-area-sm" style="min-height: 400px;">
                            <div class="scrollbar-container">

                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover"
                                        id="tableList">
                                        <thead>
                                            <tr>
                                                <th class="text-left pl-1">#</th>
                                                <th class="text-left pl-1">Potencia</th>
                                                <th class="text-left pl-1">frecuencia</th>
                                                <th class="text-left pl-1">tx_rx</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                          $selap = $conn->query("SELECT * FROM update_antena where idantena = '$freId'");
                          if($selap->rowCount() > 0) {
                          $i = 1;
                          while ($selapRow = $selap->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $selapRow['potencia']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $selapRow['frecuencia']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $selapRow['tx_rx']; ?>
                                                </td>


                                            </tr>

                                            <?php }//cierre del if
                                }
                              else
                                { ?>
                                            <tr>
                                                <td>
                                                    <h3>No hay frecuencias </h3>
                                                </td>
                                            </tr>
                                            <?php }
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
        <br>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Actualizar Firmware</h5>
                    <div class="btn-actions-pane-right">
                        <button class="btn btn-sm btn-primary " data-bs-toggle="modal"
                            data-bs-target="#modalForAddFirmware">Agregar firmware</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="scroll-area-sm" style="min-height: 400px;">
                        <div class="scrollbar-container">

                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover"
                                    id="tableList1">
                                    <thead>
                                        <tr>
                                            <th class="text-left pl-1">#</th>
                                            <th class="text-left pl-1">firmware</th>
                                            <th class="text-left pl-1">descripcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                          $selfirm = $conn->query("SELECT * FROM update_firmware where idantena = '$freId'");
                          if($selfirm->rowCount() > 0) {
                          $i = 1;
                          while ($selfirmRow = $selfirm->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $i++; ?>
                                            </td>
                                            <td>
                                                <?php echo $selfirmRow['firmware']; ?>
                                            </td>
                                            <td>
                                                <?php echo $selfirmRow['descripcion']; ?>
                                            </td>



                                        </tr>

                                        <?php }//cierre del if
                                }
                              else
                                { ?>
                                        <tr>
                                            <td>
                                                <h3>No hay actualizaciones </h3>
                                            </td>
                                        </tr>
                                        <?php }
                               ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </main>

</body>


<?php include("includes/footer.php"); ?>
<?php include("includes/modal.php"); ?>



</html>