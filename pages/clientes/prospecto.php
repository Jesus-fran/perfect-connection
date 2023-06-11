<?php
    if (isset($_POST['enviar'])) {
        $idempleado = $_POST['nombre']; // id del empleado
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
                    $query = $conn -> query("SELECT foto FROM prospecto WHERE nombre = '$idempleado'");
                    $row = $query -> fetch(PDO::FETCH_ASSOC);
                    $foto = $row['foto'];
                    if ($foto != '0') {
                        unlink("././imgperfiles/" . $foto);
                    }
                    move_uploaded_file($tmp, '././imgperfiles/'. $filename); // Mueve la imagen a la carpeta imgperfiles
                    $query = $conn -> query("UPDATE prospecto SET foto = '$filename' WHERE nombre = '$idempleado'"); // Actualiza la imagen en la base de datos
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
    <title>Prospecto</title>
</head>
<body>
    <div class="container">
        <form id="formProspecto">
            <fieldset class="row form-fieldset my-5">
                <div class="border col-8">
                    <div class="page-header my-3">
                        <div class="page-pretitle">
                            Administrador
                        </div>
                        <h2 class="page-title mb-2">
                            DATOS DEL PROSPECTO
                        </h2>
                        <hr class="m-0">
                    </div>
                    <div class="row g-3 mb-2">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="apellido">Apellido Paterno</label>
                                <input type="text" class="form-control" id="app" name="apellido" placeholder="Apellido Paterno">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="apm">Apellido Materno</label>
                                <input type="text" class="form-control" id="apm" name="apm" placeholder="Apellido Materno">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-2">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="tel1">Teléfono 1</label>
                                <input type="text" class="form-control" id="tel1" name="telefono" placeholder="Teléfono 1">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="tel2">Teléfono 2</label>
                                <input type="text" class="form-control" id="tel2" name="tel2" placeholder="Teléfono 2">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="referencia">Referencia</label>
                                <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Referencia">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fecha_solicitud">Fecha de Solicitud</label>
                                <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud" placeholder="Fecha de Solicitud">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="requerimientos">Requerimientos</label>
                                <input type="text" class="form-control" id="requerimientos" name="requerimientos" placeholder="Requerimientos">
                                <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                            </div>
                        </div>
                    </div>
                    <div class="text my-3">
                        <button type="button" onclick="addProspecto()" class="btn btn-primary">Añadir prospecto</button>
                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                    </div>
                </div>

                <div class="border col d-flex justify-content-center align-items-center">
                    <div class="container-fluid text-center">
                        <img class="img-fluid" src="././imgperfiles/logo.png" alt="">
                    </div>
                </div>
    </div>

</body>
<script src="././js/addnewprospecto.js"></script>


<script>
    const input = document.querySelector('#img');
    const previewImg = document.querySelector('#preview-img');
    const nombre = document.querySelector('#nombre')
    const nombre2 = document.querySelector('#nombre2')

    nombre.addEventListener('input', () => {
        nombre2.value = nombre.value;
    })

    input.addEventListener('change', () => {
    const file = input.files[0];
    const reader = new FileReader();

    reader.onload = () => {
        previewImg.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        previewImg.src = "#";
    }
    });
</script>
</html>