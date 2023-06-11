$(document).on("submit", "#formFrecuencia", function () { //actualizar examen
    $.post("query/updateFrecuencia.php", $(this).serialize(), function (data) { //enviar datos
      if (data.res == "success") { //si se actualizo correctamente
        Swal.fire( //mostrar mensaje de exito
          'Actualizacion correcta',
          'Estado actualizado',
          'success'
        )
        refreshDiv(); //refrescar tabla
      }
      else if (data.res == "failed") { //si no se actualizo correctamente
        Swal.fire( //mostrar mensaje de error
          '¡Algo salió mal!',
          'Algo salió mal',
          'error'
        )
      }
    }, 'json')
    return false;
  });