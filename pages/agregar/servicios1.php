<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>

</head>

<body>
    <form id="formServicio">
        <input type="text" id="nombre" name="nombre" placeholder="nombre">
        <input type="text" id="descripcion" name="descripcion" placeholder="descripción">
        <div class="col-sm-2 text-end">
            <button class="btn btn-primary form-control" type="button" onclick="addServicio()">Agregar zona</button>
        </div>
        <input type="reset" value="Cancelar">
    </form>
</body>
<script src="././js/addnewservicio.js"></script>


</html>