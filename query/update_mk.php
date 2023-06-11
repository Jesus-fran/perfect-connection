<?php
    include '../conn.php';
    extract ($_POST);

    $updMk = $conn ->query("INSERT INTO update_mk (version, fecha, cpu,ram,descripcion,idmikrotik) VALUES ('$version','$fecha','$cpu','$ram','$descripcion','$microtik')");

    if ($updMk) {
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>