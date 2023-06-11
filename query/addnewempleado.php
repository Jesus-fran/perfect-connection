<?php
    include '../conn.php';
    extract ($_POST);

    $fecha = date('Y-m-d H:i:s');
    $insEmpleado = $conn ->query("INSERT INTO empleado (nombre, app, apm, telefono, email, rol, tipo, estatus, sueldo, fecha_ingreso, password) VALUES ('$nombre','$app','$apm','$tel','$email','$rol','$tipo','$estatus','$sueldo','$fecha_ingreso','$password')");

    if ($insEmpleado) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego nuevo empleado', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>