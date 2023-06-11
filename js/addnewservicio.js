const addServicio = async () => {
    var nombre = document.querySelector("#nombre").value;
    var descripcion = document.querySelector("#descripcion").value;
    var estatus = document.querySelector("#estatus").value;
    var idempleado = document.querySelector("#idempleado").value;


    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("descripcion", descripcion);
    datos.append("estatus", estatus);
    datos.append("idempleado", idempleado);

    var a = await fetch("./query/addnewservicio.php",{
        method:'POST',
        body:datos
    });

    var resultado = await a.json();
    if (resultado = 'success') {
        Swal.fire({
            icon: 'success',
            tittle: 'Exito',
            text: 'Datos agregados correctamente',
        })
        document.querySelector('#formServicio').reset();
    } else{
        Swal.fire({
            icon: 'error',
            tittle: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}