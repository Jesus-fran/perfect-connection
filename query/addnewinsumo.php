<?php
    include '../conn.php';
    extract ($_POST);

    $fecha = date('Y-m-d H:i:s');
    
    $insInsumo = $conn ->query("INSERT INTO insumo_sector (nombre, marca, tipo, precio, caracteristicas, descripcion, idsector, fecha_compra) VALUES ('$nombre','$marca','$tipo','$precio','$caracteristicas','$descripcion','$idsector', '$fecha_compra')");

    if ($insInsumo) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego nuevo insumo', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }
    echo json_encode($res);
?>