const mensualidad = async () => {
    var a = document.querySelector("#a").value;
    var fecha = document.querySelector("#fecha").value;
    var monto = document.querySelector("#monto").value;
    var cantidadpagada = document.querySelector("#cantidadpagada").value;
    var cambio = cantidadpagada - monto;
    var tipopago = document.querySelector("#tipopago").value;

    const datos = new FormData();
    datos.append("a", a);
    datos.append("fecha", fecha);
    datos.append("monto", monto);
    datos.append("cantidadpagada", cantidadpagada);
    datos.append("tipopago", tipopago);
    datos.append("cambio", cambio);

    var a = await fetch("./query/pagarmensualidad.php",{
        method:'POST',
        body:datos
    });


    if (resultado = 'success' && cambio > 0) {
        Swal.fire({
            icon: 'success',
            tittle: 'Exito',
            text: 'Cobro realizado\nSu cambio es de: ' + cambio,
            confirmButtonText: 'Aceptar',
        }).then(function() {
            location.reload();
        });
    }
    else if (resultado = 'success' && cambio <= 0) {
        Swal.fire({
            incon: 'success',
            icon: 'success',
            tittle: 'Exito',
            text: 'Cobro realizado',
        }).then(function() {
            location.reload();
        });
    }
    else{
        Swal.fire({
            icon: 'error',
            tittle: 'UPS...',
            text: 'No se realizo el cobro'
        })
    }
}