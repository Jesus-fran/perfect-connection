<?php
include '../conn.php';
function insertar_bitacora($usuario, $accion) {
    $fecha = date('Y-m-d H:i:s');
    $consulta = "INSERT INTO bitacora (usuario, accion, fecha) VALUES ('$usuario', '$accion', '$fecha')";
}

?>