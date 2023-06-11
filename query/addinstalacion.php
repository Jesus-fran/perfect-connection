<?php
    include '../conn.php';
    extract($_POST);

    $insContrato = $conn->query("INSERT INTO instalacion (idempleado, id_cliente, fecha, hora) VALUES ('$empleado','$folio','$fecha','$hora')");

    if ($insContrato) {
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>