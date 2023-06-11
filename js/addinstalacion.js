const instalacion = async() => {
    var empleado = document.getElementById('empleado').value;
    var folio = document.getElementById('folio').value;
    var fecha = document.getElementById('fecha').value;
    var hora = document.getElementById('hora').value;

    const datos = new FormData();
    datos.append('empleado', empleado);
    datos.append('folio', folio);
    datos.append('fecha', fecha);
    datos.append('hora', hora);

    var a = await fetch('./query/addinstalacion.php', {
        method: 'POST',
        body: datos
    });

    var resultado = await a.json();

    if (resultado = 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'La instalación ha sido agregada',
        })
        document.querySelector('#insForm').reset();
    } else {
        Swal.fire({
            icon: 'error',
            title: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}