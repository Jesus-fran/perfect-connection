<?php
    include '../conn.php';
    extract ($_POST);

    $insGasto = $conn ->query("INSERT INTO gasto_sector (gasto, monto, fecha_pago,tipo_pago, idsector) VALUES ('$gasto','$monto','$fecha','$tipo','$idsector')");

    if ($insGasto) {
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>