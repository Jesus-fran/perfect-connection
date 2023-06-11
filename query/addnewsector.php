<?php
    include '../conn.php';
    extract ($_POST);

    $fecha = date('Y-m-d H:i:s');

    $insSector = $conn ->query("INSERT INTO sector (sector, altura, tipo, costo_inicial, contacto, estatus, idzona, tel_contacto,est_sector) VALUES ('$sector','$altura','$tipo','$costo_inicial','$contacto','1','$zona','$tel_contacto','$est_sector')");

    if ($insSector) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego un nuevo sector', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>