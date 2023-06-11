//Login
$(document).on("submit", "#adminLoginFrm", function () {
  $.post("query/loginExe.php", $(this).serialize(), function (data) {
    if (data.res == "invalid") { //si no se encuentra el usuario
      Swal.fire(
        'Invalido',
        'Ingrese un nombre de usuario / contraseña válidos', //mostrar un mensaje de error
        'error' //tipo de mensaje
      )
    }
    else if (data.res == "success") {  //si se encuentra el usuario
      $('body').fadeOut(); //ocultar body
      window.location.href = 'direcciones.php'; //redireccionar a direcciones.php
    }
  }, 'json');

  return false;
});

