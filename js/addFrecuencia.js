$(document).on("submit", "#addFrecuenciaFrm", function () {
    $.post("query/addFrecuencia.php", $(this).serialize(), function (data) { 
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
        $('#modalForAddFrecuencia').modal('hide');

        refreshDiv(); 
      }
  
    }, 'json')
    return false;
  });

  function refreshDiv() { //refrescar tabla
    $('#tableList').load(document.URL + ' #tableList'); //refrescar tabla
    $('#refreshData').load(document.URL + ' #refreshData'); //refrescar tabla
  
  }