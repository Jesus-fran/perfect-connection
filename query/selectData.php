<?php
$empleadoId = $_SESSION['admin']['idempleado'];

$selEmpleadoData = $conn ->query("SELECT * FROM empleado WHERE idempleado = '$empleadoId'")->fetch(PDO::FETCH_ASSOC);
?>