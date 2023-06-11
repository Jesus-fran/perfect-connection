<?php
    include '../conn.php';
    extract ($_POST);

    $insgastod = $conn ->query("INSERT INTO gastos_diarios (descripcion, tipo_gasto, monto) VALUES ('$desc','$tipo','$monto')");

    if ($insgastod) {
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>