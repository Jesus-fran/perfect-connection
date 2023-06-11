<?php
include "../conn.php"; //incluir el archivo de conexión

extract($_POST); //extraer todos los valores del formulario de una sola vez

$selFrecu = $conn->query("SELECT * FROM update_antena WHERE frecuencia='$frecu'"); //verificar si la pregunta ya existe
if ($selFrecu->rowCount() > 0) {
    $res = array("res" => "exist", "msg" => $frecu); // si la pregunta ya existe
} else {
    $insFrecuencia = $conn->query("INSERT INTO update_antena(potencia,frecuencia,tx_rx,idantena) VALUES('$pote','$frecu','$tx','$antenaId') "); 

    if ($insFrecuencia) {
        $res = array("res" => "success", "msg" => $frecu); //si se insertó la pregunta correctamente
    } else {
        $res = array("res" => "failed"); //si no se insertó la pregunta correctamente
    }
}

echo json_encode($res); //enviar el resultado de la operación a ajax

?>

