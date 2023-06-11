<?php
session_start();
include "../conn.php"; 

extract($_POST); 

$selAcc = $conn->query("SELECT * FROM empleado WHERE email='$username' AND password='$password'"); 
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC); 

if ($selAcc->rowCount() > 0) { 
    $_SESSION['admin'] = array(
        'idempleado' => $selAccRow['idempleado'], 
        'adminnakalogin' => true, //
    );
    $res = array("res" => "success"); 

} else {
    $res = array("res" => "invalid"); 
}

echo json_encode($res); 
?>