<?php
    include '../conn.php';

    $valido = array('success' => false, 'mensaje' => "");

    if($_POST){
        $potencia = $_POST['potencia'];
        $frecuencia = $_POST['frecuencia'];
        $tx_rx = $_POST['tx_rx'];
        $antena = $_POST['antena'];

        $sql = "SELECT * FROM update_antena WHERE frecuencia='$frecuencia'";
        $resultado = $conn->query($sql);
        $n = $resultado->rowCount() > 0;
        if($n == 0){
            $sqlInsertar = "INSERT INTO update_antena VALUES ('$potencia','$frecuencia','$tx_rx','$antena')";
            if($conn->query($sqlInsertar) === true){
                $valido['success'] = false;
                $valido['mensaje'] = "Error al agregar datos";
            } else{
                $valido['success'] = true;
                $valido['mensaje'] = "Datos agregados correctamente";
            }
        } else{
            $valido['success'] = false;
            $valido['mensaje'] = "Ya existe una antena con esa frecuencia";
        }
    } else{
        $valido['success'] = false;
        $valido['mensaje'] = "Error al agregar datos";
    }

    echo json_encode($valido);
?>
