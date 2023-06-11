<?php
    include '../conn.php';
    extract ($_POST);

    $fecha = date('Y-m-d H:i:s');
    $insCliente = $conn ->query("INSERT INTO cliente (nombre, app, apm, telefono1, telefono2, direccion, referencias, fecha_solicitud, requerimientos, coordenadas, email) VALUES ('$a','$b','$apm','$tel1','$tel2','$direccion','$referencias','$fecha_solicitud','$requerimientos','$coordenadas','$email')");
    $deleteprospecto = $conn ->query("DELETE FROM prospecto WHERE nombre = '$a' AND app = '$b'");


    if ($insCliente) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego un nuevo cliente', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>