<?php
    if (isset($_POST['enviar'])) {
        $idempleado = $_POST['idempleado']; // id del empleado
        $maxsize = 5242880; // 5MB
        $allowtype = array('jpg', 'png', 'jpeg', 'gif');
        $img = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $filename = $idempleado . "." . $ext;

        if (!empty($img)) { // Verifica que la imagen no este vacia
            if (in_array($ext, $allowtype)) { // Verifica el formato de la imagen
                if ($size <= $maxsize) {
                    //si la imagen ya existe la elimina
                    $query = $conn -> query("SELECT foto FROM empleado WHERE idempleado = '$idempleado'");
                    $row = $query -> fetch(PDO::FETCH_ASSOC);
                    $foto = $row['foto'];
                    if ($foto != '0') {
                        unlink("././imgperfiles/" . $foto);
                    }
                    move_uploaded_file($tmp, '././imgperfiles/'. $filename); // Mueve la imagen a la carpeta imgperfiles
                    $query = $conn -> query("UPDATE empleado SET foto = '$filename' WHERE idempleado = '$idempleado'"); // Actualiza la imagen en la base de datos
                    if ($query) {
                        echo "<script>alert('Imagen actualizada')</script>";
                    } else {
                        echo "<script>alert('Error al actualizar la imagen')</script>";
                    }
                } else {
                    echo "<script>alert('La imagen es muy pesada')</script>";
                }
            } else {
                echo "<script>alert('El formato de la imagen no es valido')</script>";
            }
        } else {
            echo "<script>alert('Selecciona una imagen')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <div class="container">
        <form method="post" action="direcciones.php?page=perfil" enctype='multipart/form-data'>
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        Modulo para subir fotos de perfil
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <input type="text" hidden name="idempleado" value="<?php echo $empleadoId ?>">
                        <label for="img" class="form-label">Seleccionar imagen</label>
                        <input class="form-control" type="file" name="image" id="img">
                    </div>
                    <?php
                        $query = $conn -> query("SELECT foto FROM empleado WHERE idempleado = '$empleadoId'");
                        $row = $query -> fetch(PDO::FETCH_ASSOC);
                        $foto = $row['foto'];
                    ?>
                    <div class="col-sm-6">
                        <label for="img" class="form-label">Imagen actual</label>
                        <img src="././imgperfiles/<?php echo $foto ?>" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" name="enviar" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>