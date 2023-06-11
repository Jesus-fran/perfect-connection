<?php
    include '../conn.php';
    extract ($_POST);

    $fecha = date('Y-m-d H:i:s');
    $insProspecto = $conn ->query("INSERT INTO prospecto (nombre, app, apm, telefono1, telefono2, direccion, referencias, fecha_solicitud, requerimientos) VALUES ('$nombre','$app','$apm','$tel1','$tel2','$direccion','$referencia','$fecha_solicitud','$requerimientos')");

    if ($insProspecto) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego nuevo Prospecto', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>