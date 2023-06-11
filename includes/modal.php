<div class="modal fade" id="modalForAddFrecuencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  <!-- Modal para agregar una pregunta -->
  <div class="modal-dialog" role="document"> 
   <form class="refreshFrm" id="addFrecuenciaFrm" method="post"> <!-- Formulario para agregar una pregunta -->
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar frecuencia</h5> <!-- Titulo del modal -->
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> <!-- Boton para cerrar el modal -->
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <fieldset>
            <div class="form-group">
                <label>Potencia</label> 
                <input type="" name="pote" id="pote" class="form-control" placeholder="Introduce la potencia" autocomplete="off"> <!-- Opcion A -->
            </div>

            <div class="form-group">
                <label>frecuencia</label>
                <input type="" name="frecu" id="frecu" class="form-control" placeholder="Introduce la frecuencia" autocomplete="off"> <!-- Opcion B -->
            </div>

            <div class="form-group">
                <label>tx_rx</label>
                <input type="" name="tx" id="tx" class="form-control" placeholder="Introduce tx_rx" autocomplete="off"> <!-- Opcion C -->
                <input type="hidden" name="antenaId" value="<?php echo $freId;?>"> <!-- Id del examen -->

            </div>

          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir ahora</button>
      </div>
    </div>
   </form> 
  </div>
</div>

<div class="modal fade" id="modalForAddFirmware" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document"> 
   <form class="refreshFrm" id="addFirmwareFrm" method="post"> 
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Firmware</h5> <!-- Titulo del modal -->
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> <!-- Boton para cerrar el modal -->
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <fieldset>
            <div class="form-group">
                <label>firmware</label> 
                <input type="" name="firmware" id="firmware" class="form-control" placeholder="Introduce el firmware" autocomplete="off"> 
            </div>

            <div class="form-group">
                <label>frecuencia</label>
                <input type="" name="descripcion" id="descripcion" class="form-control" placeholder="Introduce una descripcion" autocomplete="off"> 
            </div>

            <div class="form-group">
                <input type="hidden" value="<?php echo ($selEmpleadoData['idempleado']); ?>" class="form-control" id="idempleado" name="idempleado">
                <input type="hidden" name="antenaId" value="<?php echo $freId;?>">

            </div>

          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir ahora</button>
      </div>
    </div>
   </form> 
  </div>
</div>

<div class="modal fade" id="modalForAddGasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document"> 
   <form class="refreshFrm" id="addGastoFrm" method="post"> 
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Gasto sector</h5> <!-- Titulo del modal -->
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> <!-- Boton para cerrar el modal -->
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <fieldset>
            <div class="form-group">
                <label>gasto</label> 
                <input type="" name="gasto" id="gasto" class="form-control" placeholder="Introduce el gasto" autocomplete="off"> 
            </div>

            <div class="form-group">
                <label>monto</label>
                <input type="number" name="monto" id="monto" class="form-control" placeholder="Introduce el monto" autocomplete="off"> 
            </div>
            <div class="form-group">
                <label>Periodo de pago</label>
                <select class="form-control" name="fecha" id="fecha">
                  <option value="15">15</option>
                  <option value="30">30</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tipo de pago</label>
                <select class="form-control" name="tipo" id="tipo">
                  <option value="Mensual">Mensual</option>
                  <option value="Bimestral">Bimestral</option>
                </select>
            </div>

            <div class="form-group">
                <input type="hidden" name="idsector" value="<?php echo $secId;?>">

            </div>

          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir ahora</button>
      </div>
    </div>
   </form> 
  </div>
</div>