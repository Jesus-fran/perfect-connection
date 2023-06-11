<?php
    include '../conn.php';
    extract ($_POST);


    $fecha = date('Y-m-d H:i:s');
    $insServicio= $conn ->query("INSERT INTO servicio (nombre, descripcion, estatus) VALUES ('$nombre','$descripcion','$estatus')");

    if ($insServicio) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agregó nuevo servicio', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>