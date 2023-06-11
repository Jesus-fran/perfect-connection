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
                            <h3>APs Registrados</h3>
                            <div class="table-responsive">
                                <table id="tableAp" class="table is-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Modelo</th>
                                            <th>Estado APs</th>
                                            <th>accion</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                          $selap = $conn->query("SELECT * FROM antena ORDER BY idantena DESC");
                          if($selap->rowCount() > 0) {
                          $i = 1;
                          while ($selapRow = $selap->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $i++; ?>
                                            </td>
                                            <td>
                                                <?php echo $selapRow['nombre']; ?>
                                            </td>
                                            <td>
                                            <?php 
                              if($selapRow['est_antena']==1)
                              {
                                echo "Activo";
                              }
                              else if($selapRow['est_antena']==0)
                              {
                                echo "Inactivo";
                              }
                              else if($selapRow['est_antena']==2)
                              {
                                echo "En mantenimiento";
                              }

                            ?>
                                            </td>
                                            <td>
                                                <a href="./././frecuencia.php?id=<?php echo $selapRow['idantena']; ?>"
                                                    class="btn btn-primary">Ver</a>
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