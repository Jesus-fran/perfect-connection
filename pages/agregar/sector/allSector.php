<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver todo</title>

</head>

<body>
    <section>
        <div class="container">
            <div class="row g-4 my-2">
                <div class="col-sm-12">
                    <fieldset>
                        <div class="form-fieldset">
                            <h3>Sectores Registrados</h3>
                            <div class="table-responsive">
                                <table id="tableSec" class="table is-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sector</th>
                                            <th>Tipo</th>
                                            <th>Zona</th>
                                            <th>Estado del sector</th>
                                            <th>Acciones</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                          $selSec = $conn->query("SELECT * FROM sector ORDER BY idsector DESC");
                          if($selSec->rowCount() > 0) {
                          $i = 1;
                          while ($selSecRow = $selSec->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $i++; ?>
                                            </td>
                                            <td>
                                                <?php echo $selSecRow['sector']; ?>
                                            </td>
                                            <td>
                                                <?php echo $selSecRow['tipo']; ?>
                                            </td>
                                            <td>
                                                <?php
                                        $zonaId = $selSecRow['idzona']; // selecciona el id del examen
                                        $selZona = $conn->query("SELECT * FROM zona WHERE id_zona='$zonaId' "); // selecciona todos los registros de la tabla examenc
                                        while ($selZonaRow = $selZona->fetch(PDO::FETCH_ASSOC)) { 
                                        echo $selZonaRow['zona']; // imprime el nombre del examen 
                                        }
                                            ?>
                                            </td>
                                            <td>
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
                                                echo "En mantenimiento";
                                            }

                                            ?>
                                            </td>
                                            <td>
                                            <a href="./././sector.php?id=<?php echo $selSecRow['idsector']; ?>"
                                                    class="btn btn-primary btn-sm">Editar</a>

                                        </tr>

                                        <?php }//cierre del if
                                }
                              else
                                { ?>
                                        <tr>
                                            <td>
                                                <h3>No hay Antenas</h3>
                                            </td>
                                        </tr>
                                        <?php }
                               ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>
</body>

</html>