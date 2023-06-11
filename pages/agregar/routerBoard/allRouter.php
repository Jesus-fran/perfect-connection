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
                            <h3>RouterBaord Registrados</h3>
                            <div class="table-responsive">
                                <table id="tableRt" class="table is-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Modelo</th>
                                            <th>Capacidad de usuarios</th>
                                            <th>Sector</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                          $selRt = $conn->query("SELECT * FROM mikrotik ORDER BY idmikrotik DESC");
                          if($selRt->rowCount() > 0) {
                          $i = 1;
                          while ($selRtRow = $selRt->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $i++; ?>
                                            </td>
                                            <td>
                                                <?php echo $selRtRow['modelo']; ?>
                                            </td>
                                            <td>
                                                <?php echo $selRtRow['capacidad_user']; ?>
                                            </td>
                                            <td>
                                                <?php
                                        $sectorId = $selRtRow['idsector']; // selecciona el id del examen
                                        $selSector = $conn->query("SELECT * FROM sector WHERE idsector='$sectorId' "); // selecciona todos los registros de la tabla examenc
                                        while ($selSectorRow = $selSector->fetch(PDO::FETCH_ASSOC)) { 
                                        echo $selSectorRow['sector']; // imprime el nombre del examen 
                                        }
                                            ?>
                                            </td>

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