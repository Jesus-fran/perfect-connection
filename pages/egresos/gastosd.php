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
            <form id="formGasto">
                <fieldset class="form-fieldset my-5">
                    <div class="page-header my-3">
                        <div class="page-pretitle">
                            Administrador
                        </div>
                        <h2 class="page-title mb-2">
                            PROGRAMAR INSTALACIÓN
                        </h2>
                        <hr class="m-0">
                    </div>
                    <div class="row g-3 mb-2">
                        <div class="col-sm-4">
                            <div class="form-group">
                                    <label for="empleado">Descripción del gasto</label>
                                    <input type="text" id="desc" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="folio">Monto</label>
                                <input type="text" class="form-control" id="monto" name="monto" placeholder="Monto">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="tipo">Tipo de gasto</label>
                                <select class="form-select" name="" id="tipo">
                                    <option value="1">Transporte</option>
                                    <option value="2">Comida</option>
                                    <option value="3">Nomina</option>
                                    <option value="4">KIT</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <div class="text-end mt-3">
                        <button type="button" class="btn btn-primary" onclick="gasto()">
                            Agendar
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
</body>
<script src="././js/addgastod.js"></script>
</html>