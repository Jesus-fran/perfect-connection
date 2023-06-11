<?php
    include '../conn.php';
    extract ($_POST);

    $fecha = date('Y-m-d H:i:s');

    $insZona = $conn ->query("INSERT INTO zona (zona, descripcion, codigo_zona) VALUES ('$zona','$desc','$codigo_zona')");

    if ($insZona) {
        $insbitacora = $conn ->query("INSERT INTO bitacora (idusuario, accion, fecha) VALUES ('$idempleado', 'Agrego nueva zona', '$fecha')");
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>