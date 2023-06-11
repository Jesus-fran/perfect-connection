<?php
    include '../conn.php';
    extract ($_POST);

    $fecha = date('Y-m-d H:i:s');
    $insProducto = $conn ->query("INSERT INTO producto (nombre, precio, descripcion, caracteristicas, idservicio) VALUES ('$nombre','$precio','$descripcion','$caracteristicas','$idservicio')");

    if ($insProducto) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego nuevo Producto', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>