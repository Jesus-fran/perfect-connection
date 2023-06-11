<?php
session_start();
if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php"); // Si no existe una sesión iniciada, redireccionar a index.php

include 'conn.php';
include 'includes/header.php';
include 'query/selectData.php';
include 'includes/footer.php';

$freId = $_GET['id'];

$selProspecto = $conn->query("SELECT * FROM prospecto WHERE idcliente = '$freId'");
$row = $selProspecto->fetch(PDO::FETCH_ASSOC);
$nombre = $row['nombre'];
$app = $row['app'];
$apm = $row['apm'];
$tel1 = $row['telefono1'];
$tel2 = $row['telefono2'];
$dir = $row['direccion'];
$ref = $row['referencias'];
$fechasolicitud = $row['fecha_solicitud'];
$requerimientos = $row['requerimientos'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form id="formCliente" autocomplete="off">
            <fieldset class="form-fieldset my-5">
                <div class="page-header my-3">
                    <div class="page-pretitle">
                        Administrador
                    </div>
                    <h2 class="page-title mb-2">
                        DATOS DEL CLIENTE
                    </h2>
                    <hr class="m-0">
                </div>
                <div class="row g-12 mb-2">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="a" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="app">Apellido Paterno</label>
                            <input type="text" class="form-control" id="b" name="app" placeholder="Apellido Paterno" value="<?php echo $app; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="apm">Apellido Materno</label>
                            <input type="text" class="form-control" id="apm" name="apm" placeholder="Apellido Materno" value="<?php echo $apm; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tel1">Teléfono 1</label>
                            <input type="text" class="form-control" id="tel1" name="tel1" placeholder="Teléfono 1" value="<?php echo $tel1; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tel2">Teléfono 2</label>
                            <input type="text" class="form-control" id="tel2" name="tel2" placeholder="Teléfono 2" value="<?php echo $tel2; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="<?php echo $dir; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="referencia">Referencia</label>
                            <input type="text" class="form-control" id="referencias" name="referencia" placeholder="Referencia" value="<?php echo $ref; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="fecha_solicitud">Fecha de Solicitud</label>
                            <input type="text" class="form-control" id="fecha_solicitud" name="fecha_solicitud" placeholder="Fecha de Solicitud" value="<?php echo $fechasolicitud; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="requerimientos">Requerimientos</label>
                            <input type="text" class="form-control" id="requerimientos" name="requerimientos" placeholder="Requerimientos" value="<?php echo $requerimientos; ?>">
                        </div>
                    </div>
                </div>
                <div class="row g-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="fecha_entrega">Coordenadas</label>
                            <input type="text" class="form-control" id="coordenadas" name="coordenadas" placeholder="Coordenadas">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="fecha_entrega">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            <input type="text" id="idempleado" hidden name="codigo_zona" placeholder="codigo_zona" value="<?php echo $empleadoId ?>">
                        </div>
                    </div>
                </div>
                <div class="text-end my-3">
                    <button type="button" class="btn btn-primary" id="btnGuardar" onclick="newCliente()" name="btnGuardar">Guardar</button>
                    <button type="reset" class="btn btn-secondary" id="btnCancelar" name="btnCancelar">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
<script src="js/addnewcliente.js"></script>
</html>