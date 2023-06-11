$(document).on("submit", "#formSector", function () { 
    $.post("query/updateSector.php", $(this).serialize(), function (data) { 
      if (data.res == "success") {
        Swal.fire( 
          'Actualizacion correcta',
          'Estado actualizado',
          'success'
        )
        refreshDiv(); 
      }
      else if (data.res == "failed") { 
        Swal.fire(
          '¡Algo salió mal!',
          'Algo salió mal',
          'error'
        )
      }
    }, 'json')
    return false;
  });