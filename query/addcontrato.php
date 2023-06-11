<?php
    include '../conn.php';
    extract($_POST);

    $insContrato = $conn->query("INSERT INTO contrato (idcliente, idzona, idsector, idantena, idmikrotik, idservicio, idproducto, fecha_contrato, fecha_corte, p_mensualidad, metodopago, costocontrato) VALUES ('$idcliente','$idzona','$idsector','$idantena','$idmicrotik','$idservicio','$idproducto','$fechacontrato','$fechacorte','$b','$pago','$costocontrato')");
    $insMensualidad = $conn->query("INSERT INTO mensualidad (folio, mes) VALUES ('$idcliente','$b')");

    if ($insContrato) {
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>