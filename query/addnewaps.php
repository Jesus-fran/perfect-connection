<?php
    include '../conn.php';
    extract ($_POST);
    $insAntena = $conn ->query("INSERT INTO antena (nombre,ssid, pwd_red, usuario, pwd_acceso, ip, marca, tipo, descripcion, precio_ini, capacidad_user, grados, idsector, modo, fecha_compra,mod_operacion) VALUES ('$nombre','$ssid','$pwd_red','$usuario','$pwd_acceso','$ip','$marca','$tipo','$descripcion','$precio_ini','$capacidad_user','$grados','$sector','$modo','$fecha','$mod_operacion')");
    $fecha = date('Y-m-d H:i:s');

    if ($insAntena) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego una nueva AP', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>