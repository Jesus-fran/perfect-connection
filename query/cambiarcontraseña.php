<?php
    include '../conn.php';
    extract ($_POST);

    $cambiarContraseña = $conn ->query("UPDATE empleado SET password = '$nuevacontraseña' WHERE password = '$contraseñaactual' AND idempleado = '$idempleado'");

    if ($cambiarContraseña) {
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }
    echo json_encode($res);
?>