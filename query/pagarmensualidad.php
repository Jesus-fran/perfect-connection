<?php
    include '../conn.php';
    extract($_POST);

    $insContrato = $conn->query("INSERT INTO mensualidad (folio, mes, monto, tipo, cambio) VALUES ('$a','$fecha','$monto','$tipopago','$cambio')");

    if ($insContrato) {
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>