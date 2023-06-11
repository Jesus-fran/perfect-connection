<?php
include "../conn.php"; //incluir el archivo de conexión

extract($_POST); //extraer todos los valores del formulario de una sola vez

$updFrec = $conn->query("UPDATE antena SET est_antena = '$newEstado' WHERE idantena = '$freId'"); //actualizar el examen en la base de datos

if ($updFrec) {
    $res = array("res" => "success", "msg" => $newEstado); //si se actualizó el examen correctamente
} else {
    $res = array("res" => "failed"); //si no se actualizó el examen correctamente
}
echo json_encode($res); //enviar el resultado de la operación a ajax
?>