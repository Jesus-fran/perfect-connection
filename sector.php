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

$secId = $_GET['id'];

$selSec = $conn->query("SELECT * FROM sector WHERE idsector = '$secId'");
$selSecRow = $selSec->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="assets/dist/css/style.css" rel="stylesheet"> <!-- importa el archivo de estilo -->


    <title>Sector</title>
</head>

<body id="body">
    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-6">
                <div id=refreshData>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sector</h5>
                            <form class="row g-3" method="post" id="formSector">
                                <div class="col-12">
                                    <label class="form-label">sector</label>
                                    <input type="hidden" name="secId" value="<?php echo $selSecRow['idsector']; ?>"> <!-- campo oculto para el id del examen -->
                                    <p class="fs-3"><?php echo $selSecRow['sector']; ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">tipo</label>
                                    <p class="fs-3"><?php echo $selSecRow['tipo']; ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Zona</label>
                                    <p class="fs-3">                                                
                                        <?php
                                        $zonaId = $selSecRow['idzona']; // selecciona el id del examen
                                        $selZona = $conn->query("SELECT * FROM zona WHERE id_zona='$zonaId' "); // selecciona todos los registros de la tabla examenc
                                        while ($selZonaRow = $selZona->fetch(PDO::FETCH_ASSOC)) { 
                                        echo $selZonaRow['zona']; // imprime el nombre del examen 
                                        }
                                            ?></p>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Estado del sector</label>
                                    <select class="form-control" name="newEstado" required="">
                                        <option value="<?php echo $selSecRow['est_sector']; ?>">
                                            <?php 
                              if($selSecRow['est_sector']==1)
                              {
                                echo "Estable";
                              }
                              else if($selSecRow['est_sector']==0)
                              {
                                echo "Inestable";
                              }
                              else if($selSecRow['est_sector']==2)
                              {
                                echo "Reparación";
                              }

                            ?>
                                        </option>
                                        <option value="1">Estable</option>
                                        <option value="0">Inestable</option>
                                        <option value="2">Reparación</option>
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
                        <h5 class="card-title">Gastos</h5>
                        <div class="btn-actions-pane-right">
                            <button class="btn btn-sm btn-primary " data-bs-toggle="modal"
                                data-bs-target="#modalForAddGasto">Agregar Gasto sector</button>
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
                                                <th class="text-left pl-1">Gasto</th>
                                                <th class="text-left pl-1">Monto</th>
                                                <th class="text-left pl-1">Fecha de pago</th>
                                                <th class="text-left pl-1">tipo de pago</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                          $selap = $conn->query("SELECT * FROM gasto_sector where idsector = '$secId'");
                          if($selap->rowCount() > 0) {
                          $i = 1;
                          while ($selapRow = $selap->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $selapRow['gasto']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $selapRow['monto']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $selapRow['fecha_pago']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $selapRow['tipo_pago']; ?>
                                                </td>


                                            </tr>

                                            <?php }//cierre del if
                                }
                              else
                                { ?>
                                            <tr>
                                                <td>
                                                    <h3>No hay gastos</h3>
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


    </main>

</body>


<?php include("includes/footer.php"); ?>
<?php include("includes/modal.php"); ?>



</html>