<?php
    include '../conn.php';
    extract ($_POST);

    
    $insFirmware = $conn ->query("INSERT INTO update_firmware (firmware, idempleado, descripcion, idantena) VALUES ('$firmware','$idempleado','$descripcion','$antenaId')");
    
    
    if ($insFirmware) {
        $res = array("res" => "success");
    } else {
        $res = array("res" => "failed");
    }

    echo json_encode($res);
?>