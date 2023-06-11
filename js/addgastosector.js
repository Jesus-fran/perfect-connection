$(document).on("submit", "#addGastoFrm", function () {
    $.post("query/addgasto.php", $(this).serialize(), function (data) { 
      if (data.res == "exist") { 
        Swal.fire(
          'Ya existe',
          data.msg + ' <br>Esta frecuencia ya existe en la base de datos',
          'error'
        )
      }
      else if (data.res == "success") { 
        Swal.fire( 
          'Éxito',
          'Datos guardados correctamente',
          'success'
        )
        $('#addFrecuenciaFrm')[0].reset();//limpiar formulario
        $('#modalForAddGasto').modal('hide');

        refreshDiv2(); 
      }
  
    }, 'json')
    return false;
  });

  function refreshDiv2() { //refrescar tabla
    $('#tableList').load(document.URL + ' #tableList'); //refrescar tabla
    $('#refreshData').load(document.URL + ' #refreshData'); //refrescar tabla
  
  }