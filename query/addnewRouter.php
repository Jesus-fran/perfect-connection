<?php
    include '../conn.php';
    extract ($_POST);
    $fecha = date('Y-m-d H:i:s');
    $insaps = $conn ->query("INSERT INTO mikrotik (modelo, precio, capacidad_user, user_admin, pwd_admin, ip_wan, ip_lan, idsector, fecha_compra) VALUES ('$modelo','$precio','$capacidad_user','$user_admin','$pwd_admin','$ip_wan','$ip_wan','$sector','$fecha_compra')");

    if ($insaps) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego una nueva RouterBoard', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>